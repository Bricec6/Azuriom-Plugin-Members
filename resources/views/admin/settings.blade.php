@extends('admin.layouts.admin')

@section('title', trans('members::admin.plugin.name'))

@section('content')
    <div class="col-12 mb-3 d-flex gap-2">
        <div>
            <a href="https://discord.gg/Gh2yBxUWvV" target="_blank" class="btn btn-primary fw-bold rounded-4 text-uppercase px-3"><i class="bi bi-discord"></i> {{trans('members::admin.config.our_discord')}}</a>
        </div>
        <div>
            <button type="button" class="btn btn-success fw-bold rounded-4 text-uppercase px-3" data-bs-toggle="modal" data-bs-target="#donationModal"><i class="bi bi-heart-fill me-1"></i>{{trans('members::admin.config.don')}}</button>
        </div>
        <hr>
    </div>
    <div class="card shadow mb-4">
        <form action="{{ route('members.admin.settings') }}" method="POST">
            @csrf
            <div class="card-body d-flex flex-column gap-4">
                    <fieldset class="d-flex flex-column gap-3 border p-4 w-100">
                        <legend class="float-none w-auto p-2 py-0 bg-dark text-white text-lg">{{trans('members::admin.general_settings')}}</legend>
                        <div class="d-flex flex-column gap-2">
                            <h2 class="text-lg fw-bold mb-0">{{ trans('members::admin.the_mode_can_be_set') }}</h2>
                            <ul class="mb-0">
                                <li>{!! trans('members::admin.mode_allPlayers') !!}</li>
                                <li>{!! trans('members::admin.mode_Vote') !!}</li>
                                <li>{!! trans('members::admin.mode_VoteMonthly') !!}</li>
                            </ul>
                            @include('members::components.forms.select', ['name' => 'shop select', 'id' => 'modeInput', 'values' => ['allPlayers','withVote','withVoteMonthly'], 'customValueShowing' => 'members::admin.settings.mode.'])
                        </div>
                    </fieldset>
                    <fieldset class="d-flex flex-column gap-3 border p-4 w-100">
                        <p class="ms-3 mb-0">{{trans('members::admin.do_you_want_show_roles_vote_when_mode_can_show_it')}}</p>
                        <small class="text-warn text-red"></small>
                        <legend class="float-none w-auto p-2 py-0 bg-dark text-white text-lg">{{trans('members::admin.conditions_settings')}}</legend>
                        <div class="d-flex flex-md-row flex-column flex-wrap gap-4">
                            @include('members::components.forms.switch', ['id' => 'show_idInput', 'checked' => $settings['show_id']])
                            @include('members::components.forms.switch', ['id' => 'show_avatarInput', 'checked' => $settings['show_avatar']])
                            @include('members::components.forms.switch', ['id' => 'show_roleInput', 'checked' => $settings['show_role']])
                            @include('members::components.forms.switch', ['id' => 'show_nameInput', 'checked' => $settings['show_name']])
                            @include('members::components.forms.switch', ['id' => 'show_votesInput', 'checked' => $settings['show_votes']])
                            @include('members::components.forms.switch', ['id' => 'show_moneyInput', 'checked' => $settings['show_money']])
                            @include('members::components.forms.switch', ['id' => 'show_createdAtInput', 'checked' => $settings['show_createdAt']])
                        </div>
                    </fieldset>
            </div>
            <div class="text-end m-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                </button>
            </div>
        </form>
    </div>
    @include('members::admin.components.donation')
@endsection

@push('styles')
    <style>
        /*Jennifer Louie*/
        div.switcher + div.switcher {
            margin-top: 10px;
        }
        div.switcher label {
            padding: 0;
        }
        div.switcher label * {
            vertical-align: middle;
        }
        div.switcher label input {
            display: none;
        }
        div.switcher label input + span {
            position: relative;
            display: inline-block;
            margin-right: 10px;
            width: 40px;
            height: 17px;
            background: var(--bs-gray);
            border: 2px solid var(--bs-gray);
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }
        div.switcher label input + span small {
            position: absolute;
            display: block;
            width: 36%;
            height: 100%;
            background: #fff;
            border-radius: 50%;
            transition: all 0.1s ease-in-out;
            left: 0;
        }
        div.switcher label input:checked + span {
            background: var(--bs-primary);
            border-color: var(--bs-primary);
        }
        div.switcher label input:checked + span small {
            left: 60%;
        }
    </style>
@endpush
