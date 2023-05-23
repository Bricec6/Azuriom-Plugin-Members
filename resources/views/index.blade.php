@extends('layouts.app')

@section('title', trans('members::messages.members'))

@push('styles')
<link href="{{ plugin_asset('members','css/style.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script defer>
        let settings = {!! json_encode($settings) !!};
    </script>
@endpush
@push('footer-scripts')
<script src="{{ plugin_asset('members', 'js/script.js') }}" defer></script>
<script defer>
    window.onload = () =>{
        fetchAndSetData()
    }
</script>
@endpush


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center align-items-md-end mb-4">
                <nav id="pagination" aria-label="Page navigation for members list" class="sticky-top mb-4 mb-md-0 pagination bottom-field">
                </nav>
                <div class="d-flex gap-3 align-items-md-end">
                    <div class="d-flex items-controller w-50">
                        <div class="input-group justify-content-end">
                            <div class="input-group-text form-label d-flex align-items-end m-0">
                                <p class="m-0">{{trans('members::messages.show')}}</p>
                            </div>
                            <select class="form-select form-select-sm" id="itemperpage">
                                <option value="05">05</option>
                                <option value="10">10</option>
                                <option value="25" selected>25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <div class="search input-group w-50">
                        <div class="input-group-text form-label m-0">
                            <p class="m-0">{{trans('members::messages.search')}}</p>
                        </div>
                        <input type="text" class="form-control" id="search" placeholder="Name">
                    </div>
                </div>
            </div>
            <div class="table-responsive field">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        @if($settings['show_id'])
                            <th scope="col">#</th>
                        @endif
                        @if($settings['show_avatar'])
                            <th scope="col">{{trans('members::messages.avatar')}}</th>
                        @endif
                        @if($settings['show_role'])
                            <th scope="col" id="member-role">{{trans('members::messages.rank')}}</th>
                        @endif
                        @if($settings['show_name'])
                            <th scope="col" id="member-name">{{trans('members::messages.name')}}</th>
                        @endif
                        @if($settings['show_votes'] && stripos($settings['mode'], 'vote'))
                            <th scope="col" id="member-vote">{{trans('members::messages.vote')}}</th>
                        @endif
                        @if($settings['show_money'])
                            <th scope="col" id="member-money" class="text-capitalize">{{money_name()}}</th>
                        @endif
                        @if($settings['show_createdAt'])
                            <th scope="col" id="member-connexion">{{trans('members::messages.registered_at')}}</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody id="list">
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <div id="loader" class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
@endsection
