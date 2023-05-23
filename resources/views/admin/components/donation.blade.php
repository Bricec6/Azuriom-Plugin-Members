
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black fs-1" id="exampleModalLabel">{{trans('members::admin.config.don') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                <p class="fst-italic">{!! trans('members::admin.config.donation') !!}</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     class="me-2"><title>PayPal</title><path d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944.901C5.026.382 5.474 0 5.998 0h7.46c2.57 0 4.578.543 5.69 1.81 1.01 1.15 1.304 2.42 1.012 4.287-.023.143-.047.288-.077.437-.983 5.05-4.349 6.797-8.647 6.797h-2.19c-.524 0-.968.382-1.05.9l-1.12 7.106zm14.146-14.42a3.35 3.35 0 0 0-.607-.541c-.013.076-.026.175-.041.254-.93 4.778-4.005 7.201-9.138 7.201h-2.19a.563.563 0 0 0-.556.479l-1.187 7.527h-.506l-.24 1.516a.56.56 0 0 0 .554.647h3.882c.46 0 .85-.334.922-.788.06-.26.76-4.852.816-5.09a.932.932 0 0 1 .923-.788h.58c3.76 0 6.705-1.528 7.565-5.946.36-1.847.174-3.388-.777-4.471z"/></svg>
                                PAYPAL
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <a href="https://paypal.me/comeaubrice?country.x=FR&locale.x=fr_FR" target="_blank" class="btn btn-primary fw-bold rounded-4 text-uppercase px-3">PAYPAL.ME</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">

                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     class="me-2"><title>Amazon</title><path d="M.045 18.02c.072-.116.187-.124.348-.022 3.636 2.11 7.594 3.166 11.87 3.166 2.852 0 5.668-.533 8.447-1.595l.315-.14c.138-.06.234-.1.293-.13.226-.088.39-.046.525.13.12.174.09.336-.12.48-.256.19-.6.41-1.006.654-1.244.743-2.64 1.316-4.185 1.726a17.617 17.617 0 01-10.951-.577 17.88 17.88 0 01-5.43-3.35c-.1-.074-.151-.15-.151-.22 0-.047.021-.09.051-.13zm6.565-6.218c0-1.005.247-1.863.743-2.577.495-.71 1.17-1.25 2.04-1.615.796-.335 1.756-.575 2.912-.72.39-.046 1.033-.103 1.92-.174v-.37c0-.93-.105-1.558-.3-1.875-.302-.43-.78-.65-1.44-.65h-.182c-.48.046-.896.196-1.246.46-.35.27-.575.63-.675 1.096-.06.3-.206.465-.435.51l-2.52-.315c-.248-.06-.372-.18-.372-.39 0-.046.007-.09.022-.15.247-1.29.855-2.25 1.82-2.88.976-.616 2.1-.975 3.39-1.05h.54c1.65 0 2.957.434 3.888 1.29.135.15.27.3.405.48.12.165.224.314.283.45.075.134.15.33.195.57.06.254.105.42.135.51.03.104.062.3.076.615.01.313.02.493.02.553v5.28c0 .376.06.72.165 1.036.105.313.21.54.315.674l.51.674c.09.136.136.256.136.36 0 .12-.06.226-.18.314-1.2 1.05-1.86 1.62-1.963 1.71-.165.135-.375.15-.63.045a6.062 6.062 0 01-.526-.496l-.31-.347a9.391 9.391 0 01-.317-.42l-.3-.435c-.81.886-1.603 1.44-2.4 1.665-.494.15-1.093.227-1.83.227-1.11 0-2.04-.343-2.76-1.034-.72-.69-1.08-1.665-1.08-2.94l-.05-.076zm3.753-.438c0 .566.14 1.02.425 1.364.285.34.675.512 1.155.512.045 0 .106-.007.195-.02.09-.016.134-.023.166-.023.614-.16 1.08-.553 1.424-1.178.165-.28.285-.58.36-.91.09-.32.12-.59.135-.8.015-.195.015-.54.015-1.005v-.54c-.84 0-1.484.06-1.92.18-1.275.36-1.92 1.17-1.92 2.43l-.035-.02zm9.162 7.027c.03-.06.075-.11.132-.17.362-.243.714-.41 1.05-.5a8.094 8.094 0 011.612-.24c.14-.012.28 0 .41.03.65.06 1.05.168 1.172.33.063.09.099.228.099.39v.15c0 .51-.149 1.11-.424 1.8-.278.69-.664 1.248-1.156 1.68-.073.06-.14.09-.197.09-.03 0-.06 0-.09-.012-.09-.044-.107-.12-.064-.24.54-1.26.806-2.143.806-2.64 0-.15-.03-.27-.087-.344-.145-.166-.55-.257-1.224-.257-.243 0-.533.016-.87.046-.363.045-.7.09-1 .135-.09 0-.148-.014-.18-.044-.03-.03-.036-.047-.02-.077 0-.017.006-.03.02-.063v-.06z"/></svg>
                                AMAZON WISHLIST
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <a href="https://www.amazon.fr/hz/wishlist/ls/3QRAMQJ7IAYSX?ref_=wl_share" target="_blank" class="btn btn-primary fw-bold rounded-4 text-uppercase px-3">AMAZON</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     class="me-2"><title>Bitcoin</title><path d="M23.638 14.904c-1.602 6.43-8.113 10.34-14.542 8.736C2.67 22.05-1.244 15.525.362 9.105 1.962 2.67 8.475-1.243 14.9.358c6.43 1.605 10.342 8.115 8.738 14.548v-.002zm-6.35-4.613c.24-1.59-.974-2.45-2.64-3.03l.54-2.153-1.315-.33-.525 2.107c-.345-.087-.705-.167-1.064-.25l.526-2.127-1.32-.33-.54 2.165c-.285-.067-.565-.132-.84-.2l-1.815-.45-.35 1.407s.975.225.955.236c.535.136.63.486.615.766l-1.477 5.92c-.075.166-.24.406-.614.314.015.02-.96-.24-.96-.24l-.66 1.51 1.71.426.93.242-.54 2.19 1.32.327.54-2.17c.36.1.705.19 1.05.273l-.51 2.154 1.32.33.545-2.19c2.24.427 3.93.257 4.64-1.774.57-1.637-.03-2.58-1.217-3.196.854-.193 1.5-.76 1.68-1.93h.01zm-3.01 4.22c-.404 1.64-3.157.75-4.05.53l.72-2.9c.896.23 3.757.67 3.33 2.37zm.41-4.24c-.37 1.49-2.662.735-3.405.55l.654-2.64c.744.18 3.137.524 2.75 2.084v.006z"/></svg>
                                BITCOIN
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li>Chain: BSC(Binance Smart Chain) <bold class="fw-bold">BEP20</bold></li>
                                    <li>Address: <bold class="fw-bold">0x4ad20de345436773b81ddedaf7d7753d8c67e955</bold></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">

                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     class="me-2"><title>Ethereum</title><path d="M11.944 17.97L4.58 13.62 11.943 24l7.37-10.38-7.372 4.35h.003zM12.056 0L4.69 12.223l7.365 4.354 7.365-4.35L12.056 0z"/></svg>
                                ETHEREUM
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li>Chain: ETH(Ethereum) <bold class="fw-bold">ERC20</bold></li>
                                    <li>Address: <bold class="fw-bold">0x4ad20de345436773b81ddedaf7d7753d8c67e955</bold></li>
                                    <li><small>(yes its same BEP20/ERC20)</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">

                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 127.7 128" style="enable-background:new 0 0 127.7 128;" xml:space="preserve" width="16" height="16"
                                     class="me-2">
                                        <style type="text/css">
                                            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#000000;}
                                        </style>
                                    <path class="st0" d="M102.3,25.4c-0.5-0.5-0.8-1-0.8-1.7c0-0.7,0.3-1.2,0.8-1.7c1-0.9,2.6-0.9,3.7,0c0.5,0.5,0.8,1,0.8,1.7
                                        	c0,0.7-0.3,1.2-0.8,1.7c-0.5,0.4-1.2,0.7-1.8,0.7C103.5,26.2,102.8,26,102.3,25.4z"/>
                                    <path class="st0" d="M95.9,32.3c-0.4-0.5-0.7-1-0.7-1.7c0-0.7,0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.4,0.5,0.7,1,0.7,1.7
                                        	c0,0.7-0.3,1.2-0.7,1.7c-0.5,0.4-1,0.7-1.7,0.7S96.4,32.7,95.9,32.3z"/>
                                    <path class="st0" d="M88.9,38.9c-0.4-0.4-0.7-1-0.7-1.7s0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.4,0.4,0.7,1,0.7,1.7
                                        	s-0.3,1.2-0.7,1.7c-0.5,0.5-1,0.7-1.7,0.7S89.3,39.3,88.9,38.9z"/>
                                    <path class="st0" d="M82.2,45.6c-0.5-0.4-0.8-1-0.8-1.7c0-0.7,0.3-1.2,0.8-1.7c1-0.9,2.6-0.9,3.7,0c0.5,0.4,0.8,1,0.8,1.7
                                        	c0,0.7-0.3,1.3-0.8,1.7c-0.5,0.5-1.2,0.7-1.8,0.7C83.4,46.3,82.8,46.2,82.2,45.6z"/>
                                    <path class="st0" d="M75.8,52.3c-0.5-0.4-0.7-1-0.7-1.7c0-0.7,0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.5,0.4,0.7,1,0.7,1.7
                                        	c0,0.7-0.3,1.3-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7C76.9,53.1,76.2,52.9,75.8,52.3z"/>
                                    <path class="st0" d="M68.1,57.3c0-0.7,0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.5,0.5,0.7,1,0.7,1.7c0,0.7-0.3,1.2-0.7,1.7
                                        	c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7C68.3,58.6,68.1,58,68.1,57.3z"/>
                                    <path class="st0" d="M55.6,72.1c-0.4-0.4-0.7-1-0.7-1.7s0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.5,0.5,0.7,1,0.7,1.7
                                        	s-0.3,1.2-0.7,1.7c-0.4,0.5-1,0.7-1.7,0.7C56.7,72.9,56.1,72.7,55.6,72.1z"/>
                                    <path class="st0" d="M48.7,78.8c-0.5-0.4-0.8-1-0.8-1.7c0-0.7,0.3-1.2,0.8-1.7c1-0.9,2.6-0.9,3.7,0c0.5,0.5,0.8,1,0.8,1.7
                                        	c0,0.7-0.3,1.2-0.8,1.7c-0.5,0.5-1.2,0.7-1.8,0.7C49.8,79.6,49.2,79.3,48.7,78.8z"/>
                                    <path class="st0" d="M42.2,85.6c-0.4-0.4-0.7-1-0.7-1.7s0.3-1.3,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.4,0.4,0.7,1,0.7,1.7
                                        	s-0.3,1.2-0.7,1.7c-0.5,0.5-1,0.7-1.7,0.7S42.8,86,42.2,85.6z"/>
                                    <path class="st0" d="M35.5,92.3c-0.5-0.4-0.7-1-0.7-1.7s0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.4,0.5,0.7,1,0.7,1.7
                                        	s-0.3,1.3-0.7,1.7c-0.5,0.5-1,0.7-1.7,0.7C36.6,93,35.9,92.8,35.5,92.3z"/>
                                    <path class="st0" d="M28.6,99c-0.5-0.4-0.8-1-0.8-1.7c0-0.7,0.3-1.2,0.8-1.7c1-0.9,2.6-0.9,3.5,0c0.5,0.5,0.8,1,0.8,1.7
                                        	c0,0.7-0.3,1.3-0.8,1.7c-0.5,0.4-1.2,0.7-1.8,0.7C29.6,99.7,29,99.5,28.6,99z"/>
                                    <path class="st0" d="M22,105.7c-0.5-0.5-0.7-1-0.7-1.7s0.3-1.2,0.7-1.7c0.9-0.9,2.5-0.9,3.4,0c0.5,0.5,0.7,1,0.7,1.7
                                        	s-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7C23.2,106.5,22.6,106.2,22,105.7z"/>
                                    <path class="st0" d="M25.4,25.4c0.4-0.5,0.7-1,0.7-1.7c0-0.7-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.5,0.5-0.7,1-0.7,1.7
                                        	c0,0.7,0.3,1.2,0.7,1.7c0.4,0.4,1,0.7,1.7,0.7C24.4,26.2,25,26,25.4,25.4z"/>
                                    <path class="st0" d="M32.1,32.3c0.5-0.5,0.8-1,0.8-1.7c0-0.7-0.3-1.2-0.8-1.7c-1-0.9-2.6-0.9-3.7,0c-0.5,0.5-0.8,1-0.8,1.7
                                        	c0,0.7,0.3,1.2,0.8,1.7c0.5,0.4,1.2,0.7,1.8,0.7C30.9,32.9,31.6,32.7,32.1,32.3z"/>
                                    <path class="st0" d="M38.9,38.9c0.4-0.4,0.7-1,0.7-1.7s-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.4,0.4-0.7,1-0.7,1.7
                                        	s0.3,1.2,0.7,1.7c0.5,0.5,1,0.7,1.7,0.7C37.8,39.6,38.4,39.3,38.9,38.9z"/>
                                    <path class="st0" d="M45.6,45.6c0.4-0.4,0.7-1,0.7-1.7c0-0.7-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.4,0.4-0.7,1-0.7,1.7
                                        	c0,0.7,0.3,1.3,0.7,1.7c0.5,0.5,1,0.7,1.7,0.7C44.5,46.3,45.1,46.2,45.6,45.6z"/>
                                    <path class="st0" d="M52.2,52.3c0.5-0.4,0.8-1,0.8-1.7c0-0.7-0.3-1.2-0.8-1.7c-0.9-0.9-2.6-0.9-3.5,0c-0.5,0.4-0.8,1-0.8,1.7
                                        	c0,0.7,0.3,1.3,0.8,1.7c0.5,0.5,1.2,0.7,1.8,0.7C51.1,53.1,51.8,52.9,52.2,52.3z"/>
                                    <path class="st0" d="M59.7,57.3c0-0.7-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.5,0.5-0.7,1-0.7,1.7c0,0.7,0.3,1.2,0.7,1.7
                                        	c0.4,0.4,1,0.7,1.7,0.7c0.7,0,1.2-0.3,1.7-0.7C59.5,58.6,59.7,58,59.7,57.3z"/>
                                    <path class="st0" d="M65.7,65.8c0.5-0.5,0.7-1,0.7-1.7s-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.5,0.5-0.7,1-0.7,1.7
                                        	s0.3,1.2,0.7,1.7c0.4,0.4,1,0.7,1.7,0.7C64.7,66.5,65.3,66.2,65.7,65.8z"/>
                                    <path class="st0" d="M72.4,72.1c0.5-0.4,0.8-1,0.8-1.7s-0.3-1.2-0.8-1.7c-1-0.9-2.6-0.9-3.5,0c-0.5,0.5-0.8,1-0.8,1.7
                                        	s0.3,1.2,0.8,1.7c0.5,0.5,1.2,0.7,1.8,0.7C71.2,72.9,71.9,72.7,72.4,72.1z"/>
                                    <path class="st0" d="M79.2,78.8c0.4-0.4,0.7-1,0.7-1.7c0-0.7-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.4,0.5-0.7,1-0.7,1.7
                                        	c0,0.7,0.3,1.2,0.7,1.7c0.5,0.5,1,0.7,1.7,0.7C78,79.6,78.7,79.3,79.2,78.8z"/>
                                    <path class="st0" d="M85.9,85.6c0.4-0.4,0.7-1,0.7-1.7s-0.3-1.3-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.4,0.4-0.7,1-0.7,1.7
                                        	s0.3,1.2,0.7,1.7c0.5,0.5,1,0.7,1.7,0.7C84.9,86.3,85.4,86,85.9,85.6z"/>
                                    <path class="st0" d="M92.2,92.3c0.5-0.4,0.7-1,0.7-1.7s-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.4,0.5-0.7,1-0.7,1.7
                                        	s0.3,1.3,0.7,1.7c0.5,0.5,1,0.7,1.7,0.7C91.1,93,91.8,92.8,92.2,92.3z"/>
                                    <path class="st0" d="M99.3,99c0.5-0.4,0.7-1,0.7-1.7c0-0.7-0.3-1.2-0.7-1.7c-0.9-0.9-2.5-0.9-3.4,0c-0.5,0.5-0.7,1-0.7,1.7
                                        	c0,0.7,0.3,1.3,0.7,1.7c0.4,0.4,1,0.7,1.7,0.7S98.9,99.5,99.3,99z"/>
                                    <path class="st0" d="M106,105.7c0.5-0.5,0.8-1,0.8-1.7s-0.3-1.2-0.8-1.7c-1-0.9-2.6-0.9-3.5,0c-0.5,0.5-0.8,1-0.8,1.7
                                        	s0.3,1.2,0.8,1.7c0.5,0.4,1.2,0.7,1.8,0.7C104.8,106.5,105.4,106.2,106,105.7z"/>
                                    <path class="st0" d="M41.3,27.3c6.8-4.5,14.3-6.6,22.6-6.7c8.1,0,15.6,2.2,22.6,6.7l14.4-14.4C89.6,4.3,77.4,0,63.9,0
                                        	C50.4,0,38,4.3,27,12.9L41.3,27.3z"/>
                                    <path class="st0" d="M26.9,86.4c-4.6-7-6.8-14.4-6.8-22.4c0-8.1,2.2-15.6,6.8-22.4L12.6,27.3C4.2,38.3,0,50.5,0,64.1
                                        	C0,77.5,4.2,89.8,12.7,101L26.9,86.4z"/>
                                    <path class="st0" d="M86.4,100.7c-6.8,4.6-14.3,7-22.4,7.1c-8.3,0-15.9-2.2-22.7-7l-14.4,14.3c11.1,8.7,23.5,13,37.1,12.9
                                        	c13.5-0.1,25.7-4.5,36.7-12.9L86.4,100.7z"/>
                                    <path class="st0" d="M100.5,41.4c4.6,7,7,14.6,6.8,22.8c-0.1,8-2.4,15.3-6.8,22l14.4,14.3c8.5-11,12.9-23.2,12.9-36.6
                                        	c0.1-13.6-4.2-26-12.9-37.1L100.5,41.4z"/>
                                    <path class="st0" d="M115.5,105.2c5.5,0,10.1,4.5,10.1,10.1c0,5.5-4.5,10.1-10.1,10.1c-5.5,0-10.1-4.5-10.1-10.1
                                        	S109.9,105.2,115.5,105.2z"/>
                                    <path class="st0" d="M12.5,105.2c5.5,0,10,4.5,10,10.1c0,5.5-4.5,10.1-10,10.1c-5.5,0-10-4.5-10-10.1S7,105.2,12.5,105.2z"/>
                                    <path class="st0" d="M115.7,2.2c5.5,0,10,4.5,10,10.1c0,5.6-4.5,10.1-10,10.1c-5.5,0-10-4.5-10-10.1C105.7,6.7,110.2,2.2,115.7,2.2z
                                        	"/>
                                    <path class="st0" d="M12.3,2.2c5.5,0,10.1,4.5,10.1,10c0,5.5-4.5,10-10.1,10c-5.5,0-10.1-4.5-10.1-10C2.2,6.7,6.7,2.2,12.3,2.2z"/>
                                        </svg>
                                ELROND (EGLD)
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li>Chain: EGLD(Elrond eGold) <bold class="fw-bold">EGLD</bold></li>
                                    <li>Address: <bold class="fw-bold">erd16vx7sw6m6l74ru607fxvfhtnwpjhszjzdanq9yy0w99x98p2jhzsr8pdeh</bold></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
