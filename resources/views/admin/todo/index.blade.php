@extends('master-layout')


@section('content')

        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-square-o"></i>&nbsp;Todo</h3><small>Rent It System</small>
        <hr>
        <div>
            <span><a href="{{url('admin/todo/add')}}" class="btn btn-primary btn-theme btn-lg" data-toggle="tooltip" title="Add New"><i class="fa fa-plus "></i>&nbsp; Add New</a></span>
        </div>





        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Todo List</h4>

                        <hr>
                        <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i>&nbsp;Name</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i>&nbsp;Details</th>
                            <th><i class="fa fa-bookmark"></i>&nbsp;Priority</th>
                            <th><i class=" fa fa-edit"></i>&nbsp;Actions</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($todo as $todo)
                            <tr>


                                <td>{{$todo->name}}</td>
                                <td>{{$todo->details}}</td>

                                <td>
                                    @if($todo->priority == 1)
                                        <span class="label label-success label-mini">HIGH</span>
                                    @elseif($todo->priority == 2)
                                        <span class="label label-warning label-mini">Medium</span>
                                    @elseif($todo->priority == 3)
                                        <span class="label label-info label-mini">Low</span>
                                    @endif
                                </td>
                                <td>


                                    {{--<a href="{{ url('admin/todo/'.$todo->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>--}}

                                    {!! Form::open(array('url'=>'admin/todo/delete/'.$todo->id )) !!}
                                    {!! Form::hidden('_method' , 'DELETE') !!}
                                    {!! Form::submit('Delete' , array('class'=>'btn btn-warning btn-xs')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

@stop