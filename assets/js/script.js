// Cache frequently accessed DOM elements
const tbody = document.querySelector("tbody");
const pagination = document.querySelector(".pagination");
const itemShow = document.querySelector("#itemperpage");

// Initialize variables
let member_per_page = 5;
let current_page_id = 1;
let data = null;

// Add event listener for itemperpage dropdown
itemShow.onchange = reloadShowMembers;


// Reload the table and pagination when the itemperpage dropdown changes
function reloadShowMembers() {
    member_per_page = Number(itemShow.value);
    reloadMembersAndPagination();
}

// Search a member
var search = document.getElementById("search");
search.onkeyup = e=>{
    const searchValue = search.value.toLowerCase().trim();
    if (!searchValue) {
        showMembers(data, member_per_page, current_page_id);
        setPagination();
        return;
    }
    const searchedMembers = data.users.filter(member => member.name.toLowerCase().includes(searchValue));
    const page_count = Math.ceil(searchedMembers.length / member_per_page);
    showMembers({ users: searchedMembers }, member_per_page, 1);
    setPagination(page_count);
};

// Reload the table and pagination when a new page is clicked
function reloadMembersAndPagination(button = null) {

    if(button && button.getAttribute('data-page') === '«'){
        if(current_page_id > 1){
            current_page_id--;
        }
    } else if(button && button.getAttribute('data-page') === '»'){
        if(current_page_id < Math.ceil(data.users.length / member_per_page)){
            current_page_id++;
        }
    } else if(button) {
        current_page_id = parseInt(button.getAttribute('data-page'));
    }
    showMembers(data, member_per_page, current_page_id);

    setPagination();
}

// Create the pagination buttons
function setPagination() {
    const page_count = Math.ceil(data.users.length / member_per_page);
    const ul = document.createElement('ul');

    ul.classList.add('pagination', 'list-unstyled', 'm-0');

    const LEFT_ARROW = paginationButton('«');
    if (current_page_id > 1) {
        ul.appendChild(LEFT_ARROW);
    }

    const MAX_PAGES_TO_SHOW = 1;
    let start_page = current_page_id - MAX_PAGES_TO_SHOW;
    if (start_page < 1) {
        start_page = 1;
    }

    let end_page = current_page_id + MAX_PAGES_TO_SHOW;
    if (end_page > page_count) {
        end_page = page_count;
    }

    for (let i = start_page; i <= end_page; i++) {
        const btn = paginationButton(i);
        ul.appendChild(btn);
    }

    const RIGHT_ARROW = paginationButton('»');
    if (current_page_id < page_count) {
        ul.appendChild(RIGHT_ARROW);
    }
    pagination.innerHTML = '';
    pagination.appendChild(ul);
    const getCurrentPage = pagination.querySelector(`[data-page="${current_page_id}"]`);
    getCurrentPage.classList.add('active');
}

// Create a pagination button
function paginationButton(page) {
    const button = document.createElement('li');
    button.classList.add('page-item');
    button.setAttribute('data-page', page);
    button.innerHTML = `<span class="page-link">${page}</span>`;
    button.addEventListener('click', () => {
        // current_page_id = button.getAttribute('data-page');
        reloadMembersAndPagination(button);
    });
    return button;
}

// Initialize the table and pagination
function initiation() {
    showMembers(data, member_per_page, current_page_id);
    setPagination();
    const pageLi = pagination.querySelectorAll('.page-item');
    pageLi[0].classList.add("active");
}

// Populate the table with data
function showMembers(data, amount, page) {
    const start = (page - 1) * amount;
    const end = start + amount;
    let members = data.users.slice(start, end) ?? data.users;

    if(members.length === 0){
        current_page_id = 1;
        setTimeout(() => {
            reloadMembersAndPagination();
        }, 300);
    }

    tbody.innerHTML = '';

    members.forEach((member) => {
        const tr = document.createElement('tr');

        if(settings.show_id) tr.innerHTML += `<th scope="row">${member.id}</th>`;
        if(settings.show_avatar) tr.innerHTML += `<td><img src="https://mc-heads.net/avatar/${member.name}/32.png" alt="Avatar azd"></td>`;
        if(settings.show_role) tr.innerHTML += `<td style="color: ${member.role.color};">${member.role.name}</td>`;
        if(settings.show_name) tr.innerHTML += `<td>${member.name}</td>`;
        if (settings.mode.toLowerCase().includes('vote')){
            if(settings.show_votes) tr.innerHTML += `<td>${member.votes}</td>`;
        }
        if(settings.show_money) tr.innerHTML += `<td>${member.money}</td>`;
        if(settings.show_createdAt) tr.innerHTML += `<td>${member.created_at}</td>`;

        tbody.appendChild(tr);
    });
}

async function fetchAndSetData() {
    this.infos = await fetchDatas();
}
async function fetchDatas ()  {

    try{
        response = await axios({
            url: window.location.href.replace("/members", "/api/members"),
            method: 'POST'
        });
        data = response.data;
        initiation();
    } catch(err) {
        console.log("err->", err)
        console.log("err->", err.response.data)
        return res.status(500).send({ret_code: ReturnCodes.SOMETHING_WENT_WRONG});
    } finally {
        loader.style.display = "none";
    }

}
