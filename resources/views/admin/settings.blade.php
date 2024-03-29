@extends('layouts.app')
@section('title')
{{ __('lang.settings')}} - {{ config('app.name') }}
@endsection
@section('content')
    @include('layouts.header')
    <div class="limiter" id="booking">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver2 m-b-110">
                    @foreach ($settings as $setting)
                        @if ($loop->first)
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class=" cell100 column2">{{ __('lang.status') }}</th>
                                            <th class=" cell100 column2">{{ __('lang.description') }}</th>
                                            <th class=" cell100 column2">{{ __('lang.name') }}</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        @endif
                        <div class="table100-body js-pscroll">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="cell100 column2">
                                            <b
                                                style="{{ $setting->status_text == __('lang.enabled') ? 'color: #38c172;' : 'color: #e3342f;' }}">
                                                {{ $setting->status_text }}
                                            </b>
                                            <form action="{{ route('change.status', $setting->id) }}">
                                                <input type="hidden" name="status" value="{{ $setting->status }}">
                                                <br>
                                                <a href="#"> <button
                                                        class="{{ $setting->status_text == __('lang.enabled') ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm' }}"
                                                        type="submit">{{ $setting->status_text == __('lang.enabled') ? __('lang.disable') : __('lang.enable') }}</button></a>
                                            </form>
                                        </td>

                                        <td class="cell100 column2">{{ __('lang.'.$setting->description) }}</td>
                                        <td class="cell100 column2">{{ __('lang.'.$setting->name) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
