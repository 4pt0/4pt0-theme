//Ajax Scripts
(function( $ ) {

    //Filter User List
  	$.fn.filterableContent = function() {
    	
    	//Define where user list is going to show 
      var contentElement = this;    	 

    	//Main ajax function
      function getContent(contentElement) {
        var ajax_url = ajax_params.ajax_url;
        $.ajax({
          type: 'GET',
          url: ajax_url,
          data: {
            action: 'filter',
            userRoles: getUserRoles,
            userNumber: getUserNumber,
            userView: getUserView
          },
          beforeSend: function() {
            //Show loader here
          },
          success: function(data) {
            //Hide loader here
            $(contentElement).fadeOut( 100 , function() {
                $(this).html( data);
            }).fadeIn( 1000 );

          },
          error: function() {
            contentElement.html('<p>There has been a filter error.</p>');
          }
        });
      }
      getContent(contentElement);
            
      //If input is changed, load data
      $('.filter-checkbox, .map_toggle-checkbox').live('change', function() {
        getContent(contentElement);
      });
  
      //If input is clicked, trigger input change and add css class
      $('.options-filter, .options-map_toggle').live('click', function() {
        var input = $(this).find('input');
        if (input.is(':checked')) {
          input.prop('checked', false);
          $(this).removeClass('selected');
        } else {
          input.prop('checked', true);
          $(this).addClass('selected');
        }
        input.trigger('change');
        if($('.text-options').length) {
	        $('html, body').animate({
	          scrollTop: ($('.text-options').first().offset().top)
	        },500);
        }
      });
              
      //Declare User Role
      function getUserRoles() {
        
        //Make userRoles an Array
        var userRoles = [];
  
        //Conditionally Show Results
        if(!$('.filter-checkbox').is(':checked')){
          
          //Show all roles if none are checked
          $('.filter-checkbox').each(function() {
            var data = $(this).data('user_role');
            userRoles.push(data);
          });
          
        }else{           
          
          //Show Checked Filters
          $('.filter-checkbox:checked').each(function() {
            var data = $(this).data('user_role');
            userRoles.push(data);
          });
  
        }
        return userRoles;
      }
      
      //If Load More is Clicked, load data
      $('.content-load_more').live('click', function(){
        getContent(contentElement);
      });
      
      //Declare User Number
      function getUserNumber() {
        
        //Make userRoles an Array
        var userNumber = [];
  
        var data = $('.content-load_more').data('user_number');
        userNumber.push(data);
        return userNumber;      
      }
  
      //Declare User View
      function getUserView() {
        
        //Make userRoles an Array
        var userView = [];
  
        //Conditionally Show Results        
        $('.map_toggle-checkbox:checked').each(function() {
          var data = $(this).data('user_view');
          userView.push(data);
        });
        return userView;
      }
      
    };

})( jQuery );
