@extends('admin.layouts.app')
@section('title','Edit')
@section('css')
	 <!-- Styles-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="libs/datepicker/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="libs/datepicker/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
@endsection
@section('content')
	     <div class="tasktodo-edit content-wrap content-wrap2" id="tasktodo-edit">
        <div class="tasktodo tasktodo-wrap">
          <div class="tasktodo-edit__top">
            <h2 class="tasktodo-edit__top--title">Edit To Do Task</h2>
            @if(session()->has('success'))
            <div class="alert alert-success" style="text-align: center;">
                    {{ session()->has('success') ? session('success') : "" }}
                    {{ session()->forget('success') }}
            </div>
           @endif
          </div>
          <div class="tasktodo-edit__main">
            <form id="form--tasktodo-edit" action="{{route('admin.tasks.update',['task'=>$tasktodo->id])}}" method="post">
              {{ csrf_field() }}
              {{ method_field("PUT") }}
              <div class="tasktodo-edit--item">
                <div class="text"><span>Title task :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" name="title" value="{{$tasktodo->title}}"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('title')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Customer Name :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-add--status" name="customer_id">
                    @if(isset($customers))
                      <option value="{{$tasktodo->customer->id}}">{{$tasktodo->customer->first_name}} {{$tasktodo->customer->last_name}}</option>
                      @foreach($customers as $customer)
                        @if($customer->id != $tasktodo->customer->id)
                          <option value="{{$customer->id}}">{{$customer->first_name}} {{$customer->last_name}}</option>
                        @endif
                      @endforeach
                    @endif
                  </select>
                  <!-- <input class="border--base padding--base" type="text" value="" name="customer_name"/> -->
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('customer_id')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Age :</span></div>
                <div class="content">
                  {{$tasktodo->age}}
                </div>
                <div class="clear-fix"></div>
              </div> -->
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Update :</span></div>
                <div class="content">
                  <input class="border--base padding--base" value="{{$tasktodo->update}}" name="update"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('update')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div> -->
              <div class="tasktodo-edit--item">
                <div class="text"><span>To do type :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" value="{{$tasktodo->to_do_type}}" name="to_do_type"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('to_do_type')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Start task on :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="datetime-local" value="{{$tasktodo->start_task}}" name="start_task"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('start_task')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Age :</span></div>
                <div class="content">
                  <input class="border--base padding--base" value="{{$tasktodo->age}}" name="age"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('age')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div> -->
              <div class="tasktodo-edit--item">
                <div class="text"><span>Time :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="datetime-local" value="{{$tasktodo->deadline}}" name="deadline"/>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('deadline')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Note :</span></div>
                <div class="content">
                  <textarea id="editor" class="content padding--base border--base" name="note" cols="30" rows="6" placeholder="Short description" >{!!$tasktodo->note!!}</textarea>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('note')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Ranking :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-edit--rank" name="ranking">
                      <option value="0" {{$tasktodo->getValueRanking($tasktodo->ranking) == 0?"selected":""}}>Low</option>
                      <option value="1" {{$tasktodo->getValueRanking($tasktodo->ranking) == 1?"selected":""}}>High</option>
                      <option value="2" {{$tasktodo->getValueRanking($tasktodo->ranking) == 2?"selected":""}}>Nomal</option>
                  </select>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('ranking')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Status :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-edit--status" name="status">
                      <option value="0" {{$tasktodo->getValueStatus($tasktodo->status) == 0?"selected":""}}>Waiting</option>
                      <option value="1" {{$tasktodo->getValueStatus($tasktodo->status) == 1?"selected":""}}>Done</option>
                  </select>
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('status')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Assigned to  :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" value="Tranhomes" name="assigned" value="{{$tasktodo->assigned}}" />
                  @if(sizeof($errors) != 0)
                    @if($errors)
                      <p style="color:red; font-size: 10px;">{{$errors->first('assigned')}}</p>
                    @endif
                  @endif
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item text-center">
                <input class="btn--save btn--primary padding--base" type="submit" value="Save"/><a class="btn--primary padding--base btn--cancel" style="color: #fff;" href="{{route('admin.tasks.index')}}">Cancel</a>
              </div>
            </form>
          </div>
        </div>
        <!--.tasktodo-wrap-->
      </div>
@endsection
@section('script')
      <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
      <script>
      ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
                  console.error( error );
              } );
      </script>
@endsection
