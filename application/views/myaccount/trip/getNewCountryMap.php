<?php if(count($attractioncities)){ ?>

 <?php if((isset($basic['travelguide']) && $basic['travelguide']!='') || $options!=1){ ?>

<div class="container addcity-btn">
    <div class="row">

        <div class="col-md-12">

           <?php if($options!=1){ ?>
               <a href="javascript:void(0);" class="link-button checkadd" onClick="addCity('<?php echo string_encode($attractioncities[0]['country_id']) ?>')">Add New City</a>
           <?php } ?>


           <?php if(isset($basic['travelguide']) && $basic['travelguide']!=''){ ?>
               <a class="link-button travel-guide" href="<?php echo site_url('userfiles/travelguide').'/'.$basic['travelguide'] ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Travel Guide</a>
          <?php }else{ ?>
              <a id="travelguidea" class="link-button travel-guide" href="javascript:void(0);" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true" style="display: none"></i></a>
            <?php } ?>

        </div>

    </div>
</div>

<?php }else{ ?>


<div class="container addcity-btn" style="display: none;">
    <div class="row">

        <div class="col-md-12">

            <a id="travelguidea" class="link-button travel-guide" href="" target="_blank"></a>

        </div>


    </div>
</div>

<?php } ?>

 <div class="inner-mainview container">

   <div class="row">

          <ul id="sortable" class="savedsingleountry-x">

            <?php $c=0; foreach($attractioncities as $list){ $c++;

              $combination=$list['country_id']."-".$list['id'];
              $country=$list['country_id'];

             ?>

            <li id="drag-x-<?php echo $c-1; ?>" class="ui-state-default drag-x <?php if($c==1 && $select==0){ echo 'active-li'; } else if($c==count($attractioncities) && $select==1) { echo 'active-li'; } ?>"><a href="javascript:void(0);" onclick="funOpen('<?php echo md5($list['id']) ?>')"><?php echo $list['city_name']; ?></a>
            <?php if($c<count($attractioncities)){ ?>
            <span class="destination-time"><?php if(isset($list['nextdistance']) && $list['nextdistance']!='' ){ echo $list['nextdistance'].'<br/><i class="fa fa-long-arrow-right" aria-hidden="true"></i>'; } ?></span>
            <?php } ?>

             <?php if(count($attractioncities)>1){ ?>
               <span class="delete-city" onClick="removeSavedSingleCountryCity('<?php echo string_encode($combination) ?>')"><a href="javascript:void(0);"> <i class="fa fa-times" aria-hidden="true"></i></a></span>
            <?php } ?>



            </li>



            <?php } ?>

         </ul>
         <input type="hidden" id="iti" value="<?php echo $itineraryid; ?>"/>
  </div>


<div id="bindTab">
        
        <?php if($this->session->userdata('fuserid') != '' || (isset($basic['travelguide'])&&$basic['travelguide']!='')){?>
			  
		  <div class="col-md-12 inner-links-travel-guide">
			<div class="text-left">
			<div class="col-md-4 attractions-btn">
				<?php if(isset($purcahse_chk)&&$purcahse_chk == 0){?>
					<a data-toggle="modal" data-target="#pkgpurchase" id="travelguidea" class="link-button modal-link" href="javascript:void(0)"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Travel Guide</a>
				<?php }else if(isset($basic['travelguide'])&&$basic['travelguide']!=''){?>
					<a class="link-button modal-link" href="<?php echo site_url('download-guide').'/'.$cityid ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Travel Guide</a>
				<?php }?>
			  
			</div>
			</div>
		  </div>
		  
		<?php }else if(isset($basic['travelguide'])&&$basic['travelguide']!=''){?>
		  
		  <div class="col-md-12 inner-links-travel-guide">
			<div class="text-left">
			<div class="col-md-4 attractions-btn">
				<a href="javascript:void(0);" id="showLogonForm" class="link-button modal-link"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Travel Guide</a>
			  
			</div>
			</div>
		  </div>
		  
		<?php }?>

        
        
        <div class="sidebar col-md-4 scrollbar-inner">
             <div id='listings' class='listings'></div>
            </div>
           <div id="map" class="map col-md-8"> </div>

           <div class="col-md-12 inner-links">
            <div class="text-left">

              <div class="col-md-4 attractions-btn">
              <a class="link-button modal-link" data-toggle="modal" id="ckkSingleSaved" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add New Location</a>
              </div>

              <?php end($attractioncities);$lastkey = key($attractioncities); ?>
              <div class="col-md-4 attractions-btn">
              <a id="showallSingleSaved" idattr="<?php echo $cityid;; ?>" class="link-button modal-link" href="javascript:void(0);"><i class="fa fa-plus-circle" aria-hidden="true"></i>View All</a>
              </div>

              <div class="col-md-4 attractions-btn">
              <?php if($this->session->userdata('fuserid')!=''){ ?>

                 <a href="<?php echo site_url('updateUserSingleCountryTrip').'/'.$secretkey ?>" class="link-button modal-link">Save<i class="fa fa-map-signs" aria-hidden="true"></i></a>
                 <?php } else { ?>
                <a href="javascript:void(0);" id="showLogonForm" class="link-button modal-link">Save<i class="fa fa-map-signs" aria-hidden="true"></i></a>
               <?php } ?>
               </div>
                <?php if(isset($basic['travelguide']) && $basic['travelguide']!=''){ ?>
               <a class="link-button travel-guide" href="<?php echo site_url('userfiles/travelguide').'/'.$basic['travelguide'] ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download Travel Guide</a>
               <?php } ?>
            </div>
          </div>


		
</div>

</div>

<div class="container">
  <div class="row button-collections">
    <div class="col-md-12">
      <ul class="button-ul">
        <li><a id="aattr" href="<?php echo $attrurl ?>" class="link-button" target="_blank">Attraction Tickets<i class="fa fa-map-signs" aria-hidden="true"></i></a></li>
         <?php if($this->session->userdata('fuserid')!=''){ ?>

        <li><a href="<?php echo site_url('hotelListsForSavedCountry').'/'.$countryid_encrypt; ?>" id="hotellink" class="link-button">Hotel Bookings<i class="fa fa-hand-o-right" aria-hidden="true"></i></a></li>

        <?php }else{ ?>

        <li><a href="javascript:void(0);" class="link-button openloginform">Hotel Bookings<i class="fa fa-hand-o-right" aria-hidden="true"></i></a></li>

        <?php } ?>
      </ul>
    </div>
  </div>
</div>

<script>


  $(document).ready(function(){
           $.LoadingOverlay("show");
           if (!('remove' in Element.prototype)) {
              Element.prototype.remove = function() {
                if (this.parentNode) {
                    this.parentNode.removeChild(this);
                }
              };
            }


            mapboxgl.accessToken = 'pk.eyJ1IjoiZWlqaW5hYWwiLCJhIjoiY2l0eWR3NGF4MDAzMDQ1b2FpZmlmdHQzdyJ9.zONIJ0N7SED6ayhXFSR37g';

            var map = new mapboxgl.Map({
              container: 'map',
               style: 'mapbox://styles/mapbox/streets-v8',
              center: [parseFloat(<?php echo $longitude ?>),parseFloat(<?php echo $latitude ?>)],
              zoom: 12,
              minZoom:12,
              pitch: 45,
              bearing: -17.6,

            });
            map.addControl(new mapboxgl.NavigationControl());
            var stringified='<?php echo $filestore; ?>';

            var filestore=JSON.parse(stringified);

            var stores = {
              "type": "FeatureCollection",
              "features":filestore
              };
            map.on('load', function (e) {
               map.addSource("places", {
                "type": "geojson",
                "data": stores
              });
              buildLocationList(stores);

               monthArrayr=[];
              stores.features.forEach(function(marker, i){
                if(marker.isselected==1 && marker.properties.isplace==1)
                 {

                    monthArrayr.push([parseFloat(marker.geometry.coordinates[0]),parseFloat(marker.geometry.coordinates[1])]);
                 }

              });


                map.addLayer({
                'id': '3d-buildings',
                'source': 'composite',
                'source-layer': 'building',
                'filter': ['==', 'extrude', 'true'],
                'type': 'fill-extrusion',
                'minzoom': 15,
                'paint': {
                    'fill-extrusion-color': '#aaa',
                    'fill-extrusion-height': {
                        'type': 'identity',
                        'property': 'height'
                    },
                    'fill-extrusion-base': {
                        'type': 'identity',
                        'property': 'min_height'
                    },
                    'fill-extrusion-opacity': .6
                }
          });


            });


            stores.features.forEach(function(marker, i) {

              if(marker.isselected==1)
              {

                    var el = document.createElement('div');
                    el.id = "marker-" + i;
                    if(marker.properties.getyourguide==1)
                    {
                      el.className = 'gyg';
                    }
                    else
                    {
                      el.className = 'marker';
                    }

                    var att = document.createAttribute("data-toggle");
                   att.value = "tooltip";
                   el.setAttributeNode(att);
                   el.title =marker.properties.name;
                    el.style.left='-28px';
                    el.style.top='-46px';
                    new mapboxgl.Marker(el)
                        .setLngLat(marker.geometry.coordinates)
                        .addTo(map);

                    el.addEventListener('click', function(e){

                        flyToStore(marker);

                        createPopUp(marker);

                        var activeItem = document.getElementsByClassName('active');

                        e.stopPropagation();
                        if (activeItem[0]) {
                           activeItem[0].classList.remove('active');
                        }

                        var listing = document.getElementById('listing-' + i);
                        $('#listing-' + i+' h3').addClass('active');
                    });
                }
            });


            function flyToStore(currentFeature)
             {

               $("h3").removeClass('active');
               map.flyTo({
                  center: currentFeature.geometry.coordinates,
                  zoom: 17
                });

               if(currentFeature.properties.isplace==1)
               {
                   var scrollid = $('a:contains("'+currentFeature.properties.name+'")').parent().parent().attr('id');
                   if(typeof scrollid !== "undefined")
                   {
                      $('.scrollbar-inner').animate({
                        scrollTop:$("#"+scrollid).position().top - $('#'+$("#listings div").eq(0).attr('id')).position().top
                       }, '1000');
                   }
                }
            }

           function createPopUp(currentFeature)
            {

              var popUps = document.getElementsByClassName('mapboxgl-popup');
              if (popUps[0]) popUps[0].remove();
              var latlong=currentFeature.geometry.coordinates.toString().replace(',','/');
              var latlongstring=currentFeature.properties.cityid+'/'+latlong;
                if(currentFeature.properties.getyourguide==1)
                {
                    var popup = new mapboxgl.Popup({closeOnClick: false})
                      .setLngLat(currentFeature.geometry.coordinates)
                      .setHTML('<a href="javascript:void(0);" class="popupclose"><i class="fa fa-remove"></i></a>'+'<h3>'+currentFeature.properties.name+'</h3>' +
                        '<span class="knownfor">Known For</span><h4>'+currentFeature.properties.known_tags+'</h4>' +
                        '<a href="javascript:void(0);" onClick="showAttractionDetails(\'' + currentFeature.properties.cityid + "\',\'" + currentFeature.properties.attractionid + "\',\'" + currentFeature.properties.category + '\')">Read More</a><span><a href="<?php echo site_url("attractionsFromGYG") ?>/'+latlongstring+'" target="_blank">Buy Tickets</a></span>')
                      .addTo(map);
                }
                else
                {

                    if(currentFeature.properties.isplace==1)
                    {
                       if(currentFeature.properties.knownfor==0)
                        {
                             var popup = new mapboxgl.Popup({closeOnClick: false})
                            .setLngLat(currentFeature.geometry.coordinates)
                            .setHTML('<a href="javascript:void(0);" class="popupclose"><i class="fa fa-remove"></i></a>'+'<h3>'+currentFeature.properties.name+'</h3>' +
                              '<h4 class="noplace">My Activity</h4>')
                            .addTo(map);
                        }
                        else
                        {
                             var popup = new mapboxgl.Popup({closeOnClick: false})
                            .setLngLat(currentFeature.geometry.coordinates)
                            .setHTML('<a href="javascript:void(0);" class="popupclose"><i class="fa fa-remove"></i></a>'+'<h3>'+currentFeature.properties.name+'</h3>' +
                              '<span class="knownfor">Known For</span><h4>'+currentFeature.properties.known_tags+'</h4>' +
                              '<a href="javascript:void(0);" onClick="showAttractionDetails(\'' + currentFeature.properties.cityid + "\',\'" + currentFeature.properties.attractionid + "\',\'" + currentFeature.properties.category + '\')">Read More</a>')
                            .addTo(map);
                        }

                    }
                    else
                    {
                         if(currentFeature.properties.attractionid.search("_")!="-1")
                         {
                            var popup = new mapboxgl.Popup({closeOnClick: false})
                            .setLngLat(currentFeature.geometry.coordinates)
                            .setHTML('<a href="javascript:void(0);" class="popupclose"><i class="fa fa-remove"></i></a>'+'<h3>'+currentFeature.properties.name+'</h3>' +
                              '<h4 class="noplace">'+currentFeature.properties.known_tags+'</h4>')
                            .addTo(map);
                        }
                        else
                        {
                            var popup = new mapboxgl.Popup({closeOnClick: false})
                            .setLngLat(currentFeature.geometry.coordinates)
                            .setHTML('<a href="javascript:void(0);" class="popupclose"><i class="fa fa-remove"></i></a>'+'<h3>'+currentFeature.properties.name+'</h3>' +
                              '<span class="knownfor">Known For</span><h4 class="noplace">'+currentFeature.properties.known_tags+'</h4>')
                            .addTo(map);
                        }
                    }

                }


            }

          $(document).on('click','.popupclose',function(e){
            $("h3").removeClass('active');
            var popUps = document.getElementsByClassName('mapboxgl-popup');
             if (popUps[0]) popUps[0].remove();
               map.flyTo({
                  center: stores.features[0].devgeometry.devcoordinates,
                  zoom: 12,
                });
               $('.scrollbar-inner').animate({
                        scrollTop:$('#'+$("#listings div").eq(0).attr('id')).position().top
                       }, '1000');
            });

            function buildLocationList(data) {
              for (i = 0; i < data.features.length; i++) {
                var currentFeature = data.features[i];
                var prop = currentFeature.properties;

                 if((currentFeature.isselected==1 || currentFeature.tempremoved==1) && currentFeature.properties.isplace==1)
                {

                var listings = document.getElementById('listings');
                var listing = listings.appendChild(document.createElement('div'));

                if(prop.getyourguide==1)
                {
                      if(currentFeature.tempremoved==1)
                      {
                        listing.className = 'item group divgyg';
                      }
                      else
                      {
                        listing.className = 'item group divgyg backgroundclr';
                      }

                }
                else
                {
                      if(currentFeature.tempremoved==1)
                      {
                        listing.className = 'item group divtax';
                      }
                      else
                      {
                        listing.className = 'item group divtax backgroundclr';
                      }


                }
                listing.id = "listing-" + i;

                var linkh3 = listing.appendChild(document.createElement('h3'));



               var link = linkh3.appendChild(document.createElement('a'));
                link.href = 'javascript:void(0)';
                link.className = 'title';
                 if(currentFeature.properties.known_tags==0)
                {
                  link.title = 'My Activity';
                }
                else
                {
                  link.title = 'Known For : '+currentFeature.properties.known_tags;
                }

                link.dataPosition = i;

                var att = document.createAttribute("data-toggle");
                att.value = "tooltip";
                link.setAttributeNode(att);


                 if(currentFeature.properties.tag_star==1 || currentFeature.properties.tag_star==2)
                {

                  if(currentFeature.properties.ispaid==1)
                  {
                    link.innerHTML = '<span class="paidattraction"><i class="fa fa-usd" aria-hidden="true"></i></span><span class="placenm">'+prop.name+'</span><span class="starattraction"><i class="fa fa-star" aria-hidden="true"></i></span>';
                  }
                  else
                  {
                    link.innerHTML = '<span class="placenm">'+prop.name+'</span><span class="starattraction"><i class="fa fa-star" aria-hidden="true"></i></span>';
                  }
                }
                else
                {
                  if(currentFeature.properties.ispaid==1)
                  {
                    link.innerHTML = '<span class="paidattraction"><i class="fa fa-usd" aria-hidden="true"></i></span><span class="placenm">'+prop.name+'</span>';
                  }
                  else
                  {
                    link.innerHTML = '<span class="placenm">'+prop.name+'</span>';
                  }
                }

                if(currentFeature.tempremoved==1)
                {
                    var linkadd = linkh3.appendChild(document.createElement('a'));
                    linkadd.href = 'javascript:void(0)';
                    linkadd.className = 'add-tab';
                    linkadd.id = prop.attractionid;
                    linkadd.dataPosition = i;
                    linkadd.innerHTML = '<i class="fa fa-plus" aria-hidden="true" onclick="addMainAttractionSaved(\'' + prop.attractionid + '\',\'' + prop.cityid + '\')"></i>';
                }

                if(currentFeature.tempremoved==0)
                {
                    var linkdel = linkh3.appendChild(document.createElement('a'));
                    linkdel.href = 'javascript:void(0)';
                    linkdel.id = prop.attractionid;
                    linkdel.className = 'delete-tab';
                    linkdel.dataPosition = i;
                    linkdel.innerHTML = '<i class="fa fa-trash-o" aria-hidden="true" onclick="deleteMainAttractionSaved(\'' + prop.attractionid + '\',\'' + prop.cityid + '\')"></i>';
                }




                    link.addEventListener('click', function(e){
                       $(".group h3").removeClass('active');
                      var clickedListing = data.features[this.dataPosition];

                       flyToStore(clickedListing);

                      createPopUp(clickedListing);

                      var activeItem = document.getElementsByClassName('active');

                        if (activeItem[0]) {
                           activeItem[0].classList.remove('active');
                        }
                       this.parentNode.classList.add('active');

                  });

                }
              }
            }

         var cityimage='<?php echo $cityimage ?>';
         $(".mainview").attr("style","background:url('"+cityimage+"')");
         var citypostid='<?php echo $citypostid ?>';
         $("#citypostid").val(citypostid);
         setTimeout(function(){  $.LoadingOverlay("hide",true); }, 5000);

          var travelguide="<?php if(isset($basic['travelguide']) && $basic['travelguide']!=''){ echo site_url('userfiles/travelguide').'/'.$basic['travelguide'];  }else{ echo '1'; } ?>";
         if(travelguide!=1)
         {
          $(".addcity-btn").show();
          $("#travelguidea").html("Download Travel Guide");
          $("#travelguidea").attr("href",travelguide);
         }
         else
         {
          if($(".checkadd")[0])
          {}
          else
          {
            $(".addcity-btn").hide();
          }
          $("#travelguidea").html("");
          $("#travelguidea").attr("href","");
         }




  });

$("#showLogonForm").click(function(){
    $("#myModal").modal('show');
});

   function showAttractionDetails(cityid,attractionid,category)
   {
      if(cityid!='' && attractionid!='')
      {
          $.ajax({
              type:'POST',
              url:'<?php echo site_url("getAttractionData") ?>',
              data:'cityid='+cityid+'&attractionid='+attractionid+'&category='+category,
              beforeSend: function(){
               },
              complete: function(){
              },
              success:function(data)
              {
                  $("#infmdl").modal('show');
                  $("#showattractiontitle").html('');
                  $("#showattractiondetails").html('');
                  $("#showattractionaddress").html('');
                  $("#showattractioncontact").html('');
                  $("#showattractionwebsite").html('');
                  $("#showattractiontransport").html('');
                  $("#showattractiontiming").html('');
                  $("#showattractiontimereq").html('');
                  $("#showattractionwaittime").html('');
                  $("#showattractionknown").html('');
                  $("#showattractiontimefees").html('');

                   var jsonresponse=JSON.parse(data);
                   var name='N/A';var attraction_address='N/A';var attraction_contact='N/A';var attraction_website='N/A';var attraction_public_transport='N/A';var fees='N/A';
                   var attraction_timing='N/A';var attraction_time_required='N/A';var attraction_wait_time='N/A';var tag_name='N/A';var details='N/A';
                    $("#showattractionwebsite").html(attraction_website);
                  if(jsonresponse.image!='' && jsonresponse.image!=null)
                  {
                    image=jsonresponse.image;
                    var url='<?php echo site_url("userfiles/images"); ?>';
                    $("#img").attr('src',url+'/'+image);
                  }
                  else
                  {
                    var url='<?php echo site_url("assets/images/image5.jpg"); ?>';
                    $("#img").attr('src',url);
                  }

                  if(jsonresponse.name!='')
                  {
                     name=jsonresponse.name;
                  }
                  if(jsonresponse.details!='')
                  {
                     details=jsonresponse.details;
                  }
                  if(jsonresponse.attraction_address!='')
                  {
                     attraction_address=jsonresponse.attraction_address;
                  }
                  if(jsonresponse.attraction_contact!='')
                  {
                     attraction_contact=jsonresponse.attraction_contact;
                  }
                  if(jsonresponse.attraction_website!='')
                  {
                      attraction_website=jsonresponse.attraction_website;
                      $("#showattractionwebsite").html('<a href="" target="_blank">'+attraction_website+'</a>');
                    $("#showattractionwebsite a").attr('href',attraction_website);
                  }
                  if(jsonresponse.attraction_public_transport!='')
                  {
                     attraction_public_transport=jsonresponse.attraction_public_transport;
                  }
                  if(jsonresponse.attraction_timing!='')
                  {
                    attraction_timing=jsonresponse.attraction_timing;
                  }

                  if(jsonresponse.attraction_time_required!='' && jsonresponse.attraction_time_required>0)
                  {
                    if(jsonresponse.attraction_time_required<2)
                    {
                       var hr=' Hour';
                    }
                    else
                    {
                      var hr=' Hours';
                    }

                     attraction_time_required=jsonresponse.attraction_time_required+''+hr;
                  }
                  if(jsonresponse.attraction_wait_time!='')
                  {
                     attraction_wait_time=jsonresponse.attraction_wait_time;
                  }
                  if(jsonresponse.tag_name!='')
                  {
                     tag_name=jsonresponse.tag_name;
                  }
                  if(jsonresponse.attraction_admissionfee!='')
                  {
                     $(".hideattr-group").show();
                     $(".displayattr-group").removeClass('col-md-6').addClass('col-md-3');
                     fees=jsonresponse.attraction_admissionfee;
                  }
                  else
                  {
                     $(".hideattr-group").hide();
                     $(".displayattr-group").removeClass('col-md-3').addClass('col-md-6');
                  }

                  $("#showattractiontitle").html(name);
                  $("#showattractiondetails").html(details);
                  $("#showattractionaddress").html(attraction_address);
                  $("#showattractioncontact").html(attraction_contact);

                  $("#showattractiontransport").html(attraction_public_transport);
                  $("#showattractiontiming").html(attraction_timing);
                  $("#showattractiontimereq").html(attraction_time_required);
                  $("#showattractionwaittime").html(attraction_wait_time);
                  $("#showattractionknown").html(tag_name);
                  $("#showattractiontimefees").html(fees);

              }
          });
      }
  }


  function funOpen(id)
  {
     $("#citypostid").val(id);
     $("li").removeClass('active-li');
      $("ul#sortable li").click(function(){
          if($(this).attr('id')!='lastdragli')
          {
            $(this).siblings('li').removeClass('active-li');
            $(this).addClass('active-li');
          }
     });
      var iti='<?php echo $itineraryid; ?>';
     $.ajax({
          type:'POST',
          url:'<?php echo site_url("getUserSavedSingleCountryAttractions") ?>',
          data:'id='+id+'&iti='+iti,
          beforeSend: function(){
             $.LoadingOverlay("show");
          },
          complete: function(){
              setTimeout(function(){  $.LoadingOverlay("hide",true); }, 3000);
          },
          success:function(data)
          {
              res=IsJsonString(data);
              if(res)
              {
                 var jsn = JSON.parse(data);
                 if(jsn.login==0)
                 {
                     $("#signintabli").addClass('active');
                     $("#signuptabli").removeClass('active');
                     $("#signup").removeClass('active in');
                     $("#signin").addClass('active in');
                     $('#myModal').modal({
                        backdrop: 'static',
                        keyboard: true
                     });
                 }
                 else if(jsn.tripdelete==1)
                 {
                   window.location="<?php echo site_url('trips') ?>";
                 }
                 return false;
              }
             $("#bindTab").html(data.body);
          }
     });

  }

 $("#showallSingleSaved").click(function(){
     var iti='<?php echo $itineraryid; ?>';
     $.ajax({
        url: '<?php echo site_url("getAllAttractionsOfCitySaved") ?>',
        type: 'POST',
        data: 'id='+$(this).attr('idattr')+'&iti='+iti,
        beforeSend: function(){
             $.LoadingOverlay("show");
          },
          complete: function(){
              setTimeout(function(){  $.LoadingOverlay("hide",true); }, 3000);
          },
          success:function(data)
          {
               res=IsJsonString(data);
              if(res)
              {
                 var jsn = JSON.parse(data);
                 if(jsn.login==0)
                 {
                     $("#signintabli").addClass('active');
                     $("#signuptabli").removeClass('active');
                     $("#signup").removeClass('active in');
                     $("#signin").addClass('active in');
                     $('#myModal').modal({
                        backdrop: 'static',
                        keyboard: true
                     });
                 }
                 else if(jsn.tripdelete==1)
                 {
                   window.location="<?php echo site_url('trips') ?>";
                 }
                 return false;
              }
              $("#bindTab").html(data.body);
              $("#isall").val(1);
          }

    });

});
    </script>

  <script>

$(document).ready(function(){

     var coid='<?php echo $basic['country_id'] ?>';
     var iti='<?php echo $itineraryid; ?>';
     $( "#sortable" ).sortable({
      appendTo: "parent",
      axis: false,
      containment: 'document',
      cursor: 'move',
      cursorAt: false,
      dropOnEmpty: true,
      forceHelperSize: true,
      forcePlaceholderSize: true,
      iframeFix: true,
      items: 'div.dragableBlock',
      greedy: true,
      grid: false,
      helper: "clone",
      opacity: 0.45,
      placeholder: 'ui-block-placeholder',
      revert: false,
      scroll: true,
      scrollSensitivity: 20,
      scrollSpeed: 20,
      scope: "default",
      tolerance: "pointer",
      zIndex: 9999,
      start: function (event, ui) { ui.item.bind("click.prevent",
              function(event) { event.preventDefault(); });},
      stop: function (event, ui) { ui.item.unbind("click.prevent"); },
      items: "li.drag-x",
      update: function (event, ui) {
            var data = $(this).sortable('serialize');
            $.ajax({
                data: data+'&iti='+iti+'&coid='+coid,
                type: 'POST',
                url: '<?php echo site_url("savedSingleCountryXOrder") ?>',
                beforeSend: function(){
                   $.LoadingOverlay("show");
                },
                complete: function(){
                    setTimeout(function(){  $.LoadingOverlay("hide",true); }, 3000);
                },
                success:function(data)
                {
                    res=IsJsonString(data);
                    if(res)
                    {
                       var jsn = JSON.parse(data);
                       if(jsn.login==0)
                       {
                           $("#signintabli").addClass('active');
                           $("#signuptabli").removeClass('active');
                           $("#signup").removeClass('active in');
                           $("#signin").addClass('active in');
                           $('#myModal').modal({
                              backdrop: 'static',
                              keyboard: true
                           });
                       }
                       else if(jsn.tripdelete==1)
                       {
                         window.location="<?php echo site_url('trips') ?>";
                       }
                       return false;
                    }
                    $("#bindMainPage").html(data.body);
                }
            });
      }
   });
   $( "#sortable" ).disableSelection();
    var cityid="<?php echo $cityid; ?>";
    var iti='<?php echo $itineraryid; ?>';
    $('#listings').sortable({
            axis: 'y',
            items: "div.backgroundclr",
            update: function (event, ui) {
                  var data = $(this).sortable('serialize');
                  $.ajax({
                      data: data+'&cityid='+cityid+'&iti='+iti,
                      type: 'POST',
                      url: '<?php echo site_url("saveSingleListing") ?>',
                      beforeSend: function(){
                         $.LoadingOverlay("show");
                      },
                      complete: function(){
                          setTimeout(function(){  $.LoadingOverlay("hide",true); }, 3000);
                      },
                      success:function(data)
                      {
                           res=IsJsonString(data);
                            if(res)
                            {
                               var jsn = JSON.parse(data);
                               if(jsn.login==0)
                               {
                                   $("#signintabli").addClass('active');
                                   $("#signuptabli").removeClass('active');
                                   $("#signup").removeClass('active in');
                                   $("#signin").addClass('active in');
                                   $('#myModal').modal({
                                      backdrop: 'static',
                                      keyboard: true
                                   });
                               }
                               else if(jsn.tripdelete==1)
                               {
                                 window.location="<?php echo site_url('trips') ?>";
                               }
                               return false;
                            }
                          $("#bindTab").html(data.body);
                      }
                  });
            }
       });
      $( "#listings" ).disableSelection();

});


$("#ckkSingleSaved").click(function(){
$("#addUserActivityToSingleCountrySaved")[0].reset();
$("#isall").val(0);
 $('#mapModal').modal({
    backdrop: 'static',
    keyboard: false });
});


$(document).ready(function(){

    var options='<?php echo $options ?>';
    if(options==1)
    {
      $("#morecities").removeClass('classdisplay');
      $("#nomorecities").removeClass('classdisplaynone');
      $("#morecities").addClass('classdisplaynone');
      $("#nomorecities").addClass('classdisplay');
      $("#nomorecities").html('<h3>We do not have any other city for this country</h3>');
    }
    else
    {
      $("#nomorecities").removeClass('classdisplay');
      $("#morecities").removeClass('classdisplaynone');
      $("#nomorecities").addClass('classdisplaynone');
      $("#morecities").addClass('classdisplay');
      $("#countrycityselected").html(options);
    }


});


 $(document).ready(function(){
    $('.scrollbar-inner').scrollbar();
 });

</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<?php } ?>
