  
  <span class="error"></span>
  <form id="itemForm" enctype="multipart/form-data" >
  
  
  
  
  <!-- Main Options -->
   <div class="main-card mb-3 custom_card">
       <input type="hidden" name="issingleconfiguration" value="{{$issingleconfiguration}}">
       <input type="hidden" name="QuotationId" value="@if(isset($QuotationId)){{$QuotationId}}@else{{''}}@endif">
       <input type="hidden" name="itemID" value="@if(isset($Item["itemId"])){{$Item["itemId"]}}@else{{''}}@endif">       
       <div>
           <div>
               <div class="card-header">
                   <h5 class="card-title" style="margin-top: 10px">Main Options</h5>
               </div>
               <div>
                   <div class="form-row">
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="leafConstruction">Leaf Construction
                                   @if(!empty($tooltip->leafConstruction))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->leafConstruction}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="leafConstruction" id="leafConstruction" class="form-control" required>
                                   <option value="">Select any Leaf Construction</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='leaf_construction')
                                   <option value="{{$row->OptionKey}}" @if(isset($Item['LeafConstruction']))
                                       @if($Item["LeafConstruction"]==$row->OptionKey){{'selected'}} @endif
                                       @endif>{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="doorType">Door Type
                                   @if(!empty($tooltip->doorType))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->doorType}}'));
                                   </script>
                                   @endif
                               </label>
                               <input name="doorType" id="doorType" placeholder="Enter door type" type="text"
                                   value="@if(isset($Item["DoorType"])){{$Item["DoorType"]}}@else{{''}}@endif"
                                   class="form-control" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="fireRating">Fire Rating
                                   @if(!empty($tooltip->fireRating))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->fireRating}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="fireRating" id="fireRating" class="form-control" required>
                                   <option value="">Select fire rating</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='fire_rating')
                                   <option value="{{$row->OptionKey}}" @if(isset($Item["FireRating"]))
                                       @if($Item["FireRating"]==$row->OptionKey){{'selected'}} @endif
                                       @endif>{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="doorsetType">Doorset Type
                                   @if(!empty($tooltip->doorsetType))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->doorsetType}}'));
                                   </script>
                                   @endif
                                   <span class="dsl"></span>

                               </label>
                               <!-- combination_of -->
                               <select name="doorsetType" id="doorsetType"
                                   class="form-control combination_of change-event-calulation door-configuration" required>
                                   <option value="">Select door set type</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='door_configuration_doorset_type')
                                   <option value="{{$row->OptionKey}}" @if(isset($Item['DoorsetType']))
                                       @if($Item["DoorsetType"]==$row->OptionKey){{'selected'}} @endif @endif
                                       >{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="swingType">Swing Type
                                   @if(!empty($tooltip->swingType))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->swingType}}'));
                                   </script>
                                   @endif
                                   <span class="dsl"></span>
                               </label>
                               <select name="swingType" id="swingType" class="form-control combination_of" required>
                                   <option value="">Select swing type</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='door_configuration_swing_type')
                                   <option value="{{$row->OptionKey}}" @if(isset($Item["SwingType"]))
                                       @if($Item["SwingType"]==$row->OptionKey) {{'selected'}} @endif @endif
                                       >{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="latchType">Latch Type
                                   @if(!empty($tooltip->latchType))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->latchType}}'));
                                   </script>
                                   @endif
                                   <span class="dsl"></span>
                               </label>
                               <select name="latchType" id="latchType" class="form-control combination_of">
                                   <option value="">Select latch type</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='door_configuration_latch_type')
                                   <option value="{{$row->OptionKey}}" @if(!empty($Item['LatchType']))
                                       @if($Item['LatchType']==$row->OptionKey) {{'selected'}} @endif @endif
                                       >{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="Handing">Handing
                                   @if(!empty($tooltip->Handing))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->Handing}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="Handing" id="Handing" class="form-control">
                                   <option value="">Select Handing</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="OpensInwards">Opens Inwards
                                   @if(!empty($tooltip->OpensInwards))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->OpensInwards}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="OpensInwards" id="OpensInwards" class="form-control">
                                   <option value="">Select Opens Inwards</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='Opens_Inwards')
                                   <option value="{{$row->OptionKey}}" @if(!empty($Item['OpensInwards']))
                                       @if($Item['OpensInwards']==$row->OptionKey) {{'selected'}} @endif
                                       @endif>{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="COC">COC

                                   @if(!empty($tooltip->COC))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->COC}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="COC" id="COC" class="form-control" required>
                                   <option value="">Select COC</option>
                                   @foreach($option_data as $row)
                                   @if($row->OptionSlug=='COC')
                                   <option value="{{$row->OptionKey}}" @if(!empty($Item['COC']))
                                       @if($Item['COC']==$row->OptionKey) {{'selected'}} @endif
                                       @endif>{{$row->OptionValue}}</option>
                                   @endif
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="tollerance">Tollerance
                                   @if(!empty($tooltip->tollerance))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->tollerance}}'));
                                   </script>
                                   @endif
                               </label>
                               <input type="number" id="tollerance" value="@if(isset($Item["Tollerance"])){{$Item["Tollerance"]}}@else{{''}}@endif" name="tollerance"
                                   class="form-control for_c_leaf_height  forleafHeightNoOP change-event-calulation door-configuration" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="undercut">Undercut
                                   @if(!empty($tooltip->undercut))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->undercut}}'));
                                   </script>
                                   @endif
                               </label>
                               <input type="number" id="undercut" readonly name="undercut" value="@if(isset($Item["Undercut"])){{$Item["Undercut"]}}@else{{''}}@endif"
                                   class="form-control change-event-calulation  undercut door-configuration">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="floorFinish">Floor Finish
                                   @if(!empty($tooltip->floorFinish))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->floorFinish}}'));
                                   </script>
                                   @endif
                               </label>
                               <input type="number" id="floorFinish" name="floorFinish" value="@if(isset($Item["FloorFinish"])){{$Item["FloorFinish"]}}@else{{''}}@endif"
                                   class="form-control change-event-calulation forundercut door-configuration" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="gap">GAP (Min:2 Max:4)
                                   @if(!empty($tooltip->gap))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->gap}}'));
                                   </script>
                                   @endif
                               </label>
                               <input type="number" min="2" max="4" id="gap" name="gap" value="@if(isset($Item["GAP"])){{$Item["GAP"]}}@else{{''}}@endif"
                                   class="form-control for_c_leaf_height  forleafHeightNoOP change-event-calulation door-configuration">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="position-relative form-group">
                               <label for="frameThickness">Frame Thickness
                                   @if(!empty($tooltip->frameThickness))
                                   <script type="text/javascript">
                                   document.write(Tooltip('{{$tooltip->frameThickness}}'));
                                   </script>
                                   @endif
                               </label>
                               <select name="frameThickness"
                                   class="form-control change-event-calulation door-configuration" id="frameThickness" required>
                                   <option value="" @if(isset($Item["FrameThickness"])) @if($Item["FrameThickness"]==""
                                       ) {{'selected'}} @endif @endif>Select Frame thickness</option>
                                   <option value="30" @if(isset($Item["FrameThickness"]))
                                       @if($Item["FrameThickness"]=="30" ) {{'selected'}} @endif @endif>30</option>
                                   <option value="32" @if(isset($Item["FrameThickness"]))
                                       @if($Item["FrameThickness"]=="32" ) {{'selected'}} @endif @endif>32</option>
                               </select>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <button type="button" id="submit" class="door_submit" style="margin-right: 20px">
                            <i class="fas fa-paper-plane"></i> @if(!empty($Item["itemId"])){{ 'Update Now' }} @else {{'Submit Now'}}  @endif
                            </button>
                    
                </form>



   
@endsection


@section("js")

<script>

        $(document).on('submit','#itemForm',function(e){
            e.preventDefault();            
            var data = $('#itemForm').serialize();
            var data2 = JSON.stringify( $('#itemForm').serializeArray() );
            // console.table(data2)
            $.ajax({
                url: "{{route('items/store1')}}",
                type: 'POST',
                data: data,
                datatype: "json",
                success: function(res){
                    console.log(res);
                    // console.log(res.data)
                    if(res.status == 'error'){
                        $('.error').empty().html(
                        `<div class="alert notify alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="fas fa-exclamation"></i> Alert!</h5>
                            <ul>
                                `+res.errors+`
                            </ul>
                        </div>`);

                        setTimeout(() => {
                            $('.error').html('')
                        }, 10000);


                    } else if(res.status == 'success'){
                        window.location.href = "{{url('/')}}/"+res.url;


                    }
                }
            });
        });


</script>

@endsection