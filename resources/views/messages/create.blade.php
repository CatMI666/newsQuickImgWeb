@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            添加系统公告
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'messages.store']) !!}

                        @include('messages.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection