
$(document).ready(function(){

// ***************************************************************************************
// *** FUNCTIONS
// ***************************************************************************************

	function updateDate(prefix) {
	
			var bmonth = Number($(prefix+'month').val());
			var bday = Number($(prefix+'day').val());
			var byear = Number($(prefix+'year').val());			
			var maxday = 31;
			var ndx;
			var dayhtml = '';
						
			switch(bmonth) { 
															
				case 2:
					
					// If the year is divisible by 4, it's a leap year...
					if(byear % 4 == 0) { 
						
						maxday = 29;
						
						// Unless the year is also divisible by 100...
						if(byear % 100 == 0) {
						
							maxday = 28; // is not a leap year
							
							// Unless the year is also divisible by 400.
							if(byear % 400 == 0) { 
							
								maxday = 29; // is a leap year after all
								
								// Leap years are complicated. :P
							}
						
						}
							
					// If it's not divisible by 4, it's definitely not a leap year.
					} else {
					
						maxday = 28;
						
					}
					break;
				
				case 4:
				case 6:
				case 9:
				case 11:
				
					maxday = 30;
					break;
				
				default:
					
					maxday = 31;
					break;
			
			}
						
			for(ndx = 1; ndx <= maxday; ndx++) {
				 dayhtml = dayhtml + '<option value="' + ndx + '">' + ndx + '</option>';
			}
			
			$(prefix + 'day').html(dayhtml);
			
			if((bday - 1) < maxday) { 
			
				$(prefix + 'day option:eq('.concat(bday-1).concat(')')).attr('selected', 'selected');
			
			}
	
	}



// ***************************************************************************************
// *** EVENTS
// ***************************************************************************************

	// When a new nonprofit is selected, submit the form
	$('#npselector #npid').change(function(){
		
		$('#npselector').submit();
		
	});
	
	// Add on-click handler to remove buttons
	$("#shift-table a.remove-shift").on("click", function(event){
		
		if($('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ') input[name="shift-regvols[]"]').val() < 1) {
			$('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ')').remove();
			$(this).parent().parent().remove();
		} else {
			if($('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ') input[name="shift-regvols[]"]').val() > 1)
				alert('You have '+ $('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ') input[name="shift-regvols[]"]').val() +' volunteers signed up for this shift. Please cancel or decline all volunteer signups first.');
			else
				alert('You have '+ $('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ') input[name="shift-regvols[]"]').val() +' volunteer signed up for this shift. Please cancel or decline all volunteer signups first.');
			return false;
		}
		
		if($('#shift-table tbody').children().length < 1) {
			$('#shift-table').hide();
			$('#remove-controls').hide();
		}
	});
	
	$('#stepnav a').click(function(){
	
		var currentId = $(this).parent().attr('id');
	
		$(this).parent().siblings().removeClass('active');
		$(this).parent().addClass('active');
		
		$('.navstep').hide();
		$('.navstep').filter(function(index){return $(this).attr('id') == currentId}).show();
	
	});
	
	$('.nextstep').click(function(){
	
		var nextStep = $(this).attr('step');
				
		$('#stepnav li').removeClass('active');
		$('#stepnav li').filter(function(index){return $(this).attr('id') == 'step' + nextStep}).addClass('active');
		
		
		$('form .navstep').hide();
		$('form .navstep').filter(function(index){return $(this).attr('id') == 'step' + nextStep}).show();
		
	});


	$('#location').change(function(){

		if($(this).val() == 'other') { 
				
			$('#control-newloc').slideDown();
		
		} else {
		
			$('#control-newloc').slideUp();
			
		}
	
	});

	$('#newshift-start-day').change(function(){
		$('#newshift-end-day').val($('#newshift-start-day').val());
		updateDate('#newshift-end-');
	});

	$('#newshift-start-month').change(function(){
		updateDate('#newshift-start-');
		$('#newshift-end-month').val($('#newshift-start-month').val());	
		updateDate('#newshift-end-');		
	});
	
	$('#newshift-start-year').change(function(){
		updateDate('#newshift-start-');
		$('#newshift-end-year').val($('#newshift-start-year').val());
		updateDate('#newshift-end-');
	});
	
	$('#newshift-start-hour').change(function(){
		$('#newshift-end-hour').val($('#newshift-start-hour').val());			
	});
	
	$('#newshift-start-minute').change(function(){
		$('#newshift-end-minute').val($('#newshift-start-minute').val());			
	});

	$('#newshift-start-ampm').change(function(){
		$('#newshift-end-ampm').val($('#newshift-start-ampm').val());			
	});
	
	$('#newshift-end-month').change(function(){updateDate('#newshift-end-')});
	$('#newshift-end-year').change(function(){updateDate('#newshift-end-')});
	

	$('#flexshift-start-day').change(function(){
		$('#flexshift-end-day').val($('#flexshift-start-day').val());
		updateDate('#flexshift-end-');			
	});

	$('#flexshift-start-month').change(function(){
		updateDate('#flexshift-start-');
		$('#flexshift-end-month').val($('#flexshift-start-month').val());
		updateDate('#flexshift-end-');				
	});
	
	$('#flexshift-start-year').change(function(){
		updateDate('#flexshift-start-');
		$('#flexshift-end-year').val($('#flexshift-start-year').val());
		updateDate('#flexshift-end-');	
	});
	
	$('#flexshift-end-month').change(function(){updateDate('#flexshift-end-')});
	$('#flexshift-end-year').change(function(){updateDate('#flexshift-end-')});		
	
	$('#event-start-day').change(function(){
		$('#event-end-day').val($('#event-start-day').val());
		updateDate('#event-end-');
	});

	$('#event-start-month').change(function(){
		updateDate('#event-start-');
		$('#event-end-month').val($('#event-start-month').val());	
		updateDate('#event-end-');		
	});
	
	$('#event-start-year').change(function(){
		updateDate('#event-start-');
		$('#event-end-year').val($('#event-start-year').val());
		updateDate('#event-end-');
	});
	
	$('#event-start-hour').change(function(){
		$('#event-end-hour').val($('#event-start-hour').val());			
	});
	
	$('#event-start-minute').change(function(){
		$('#event-end-minute').val($('#event-start-minute').val());			
	});

	$('#event-start-ampm').change(function(){
		$('#event-end-ampm').val($('#event-start-ampm').val());			
	});
	
	$('#event-end-month').change(function(){updateDate('#event-end-')});
	$('#event-end-year').change(function(){updateDate('#event-end-')});
	
	
	
	$('.modal').on('hidden', function () {
		$('.modal-footer #message').hide();
	})
	
	$('#remove-all-shifts').click(function(){
		var result = confirm('Are you sure?');

		if(result) {
			$('#shift-table tbody').html('');
			$('#hidden-shift-fields').html('');
			$('#shift-table').hide();
			$('#remove-controls').hide();
			$('.done-adding').hide();
		}
	});
	
	// When the new set shift is added...
	$('#newshift-add-set').click(function(){
				
		// Show the done button
		$('.done-adding').show();
		
		// Add shift to the visible table
		$('#shift-table tbody').append(
		
			'<tr>\
				<td><i class="icon icon-bell"></i></td>\
				<td><i class="icon icon-calendar"></i> ' + $('#newshift-start-month').val() + '/' + $('#newshift-start-day').val() + '/' + $('#newshift-start-year').val() + ' <i class="icon icon-time"></i> ' + $('#newshift-start-hour').val() + ':' + $('#newshift-start-minute').val() + $('#newshift-start-ampm').val().toLowerCase() + '</td>\
				<td><i class="icon icon-calendar"></i> ' + $('#newshift-end-month').val() + '/' + $('#newshift-end-day').val() + '/' + $('#newshift-end-year').val() + ' <i class="icon icon-time"></i> ' + $('#newshift-end-hour').val() + ':' + $('#newshift-end-minute').val() + $('#newshift-end-ampm').val().toLowerCase() + '</td>\
				<td><i class="icon icon-user"></i> ' + $('#newshift-maxvols').val() + '</td>\
				<td><a class="remove-shift" href="#"><i class="icon icon-minus-sign"></i></a></td>\
			</tr>'
		
		);
		
		// Add shift to the form via hidden fields
		var start_hour = 0;
		var end_hour = 0;
		var formfields = '<div class="hidden-shift">';
			formfields += '<input type="hidden" name="shift-type[]" value="set">';
			formfields += '<input type="hidden" name="shift-start[]" value="';
			formfields += $('#newshift-start-year').val().toString();
			formfields += '-' + $('#newshift-start-month').val().toString();
			formfields += '-' + $('#newshift-start-day').val().toString() + ' ';
			if ($('#newshift-start-hour').val() != 12) start_hour = Number($('#newshift-start-hour').val());
			if ($('#newshift-start-ampm').val() == 'PM') 
				formfields += ((start_hour) + Number(12)).toString();
			else
				formfields += (start_hour).toString();
			formfields += ':' + $('#newshift-start-minute').val().toString();
			formfields += '">';
			
			formfields += '<input type="hidden" name="shift-end[]" value="';
			formfields += $('#newshift-end-year').val().toString();
			formfields += '-' + $('#newshift-end-month').val().toString();
			formfields += '-' + $('#newshift-end-day').val().toString() + ' ';
			if ($('#newshift-end-hour').val() != 12) end_hour = Number($('#newshift-end-hour').val());
			if ($('#newshift-end-ampm').val() == 'PM') 
				formfields += ((end_hour) + Number(12)).toString();
			else
				formfields += (end_hour).toString();
			formfields += ':' + $('#newshift-end-minute').val().toString();
			formfields += '">';				 
			
			formfields += '<input type="hidden" name="shift-maxvols[]" value="';
			formfields += $('#newshift-maxvols').val().toString() + '">';
			formfields += '<input type="hidden" name="shift-new[]" value="Y" /><input type="hidden" name="shift-id[]" value="0" /></div>';
		
		$('#hidden-shift-fields').append(formfields);

		
		// Add on-click handler to new remove button
		
		$("#shift-table tbody tr:last-child td a.remove-shift").on("click", function(event){
			$('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ')').remove();
			
			$(this).parent().parent().remove();
			if($('#shift-table tbody').children().length < 1) {
				$('#shift-table').hide();
				$('#remove-controls').hide();
				$('.done-adding').hide();
			}
		});

		$('.modal-footer #message').show();
		$('#shift-table').show();
		$('#remove-controls').show();
		

		var trans = $('#newshift-add-set').removeClass('btn-primary').addClass('btn-success').text('Added!');
		
		setTimeout(function() {
			trans.removeClass('btn-success').addClass('btn-primary').text('Add Shift');
		}, 2000);		


	
	});
	
	// When the new flexible shift is added...
	$('#flexshift-add-flex').click(function(){
			
		// Show the done button
		$('.done-adding').show();
			
		$('#shift-table tbody').append(
		
			'<tr>\
				<td><i class="icon icon-random"></i></td>\
				<td><i class="icon icon-calendar"></i> ' + $('#flexshift-start-month').val() + '/' + $('#flexshift-start-day').val() + '/' + $('#flexshift-start-year').val() + '</td>\
				<td><i class="icon icon-calendar"></i> ' + $('#flexshift-end-month').val() + '/' + $('#flexshift-end-day').val() + '/' + $('#flexshift-end-year').val() + '</td>\
				<td><i class="icon icon-user"></i> ' + $('#flexshift-maxvols').val() + '</td>\
				<td><a class="remove-shift" href="#"><i class="icon icon-minus-sign"></i></a></td>\
			</tr>'
		
		);

		// Add shift to the form via hidden fields
		var formfields = '<div class="hidden-shift">';
			formfields += '<input type="hidden" name="shift-type[]" value="flexible">';
			formfields += '<input type="hidden" name="shift-start[]" value="';
			formfields += $('#flexshift-start-year').val().toString();
			formfields += '-' + $('#flexshift-start-month').val().toString();
			formfields += '-' + $('#flexshift-start-day').val().toString() + '">';
			
			formfields += '<input type="hidden" name="shift-end[]" value="';
			formfields += $('#flexshift-end-year').val().toString();
			formfields += '-' + $('#flexshift-end-month').val().toString();
			formfields += '-' + $('#flexshift-end-day').val().toString() + '">';				 
			
			formfields += '<input type="hidden" name="shift-maxvols[]" value="';
			formfields += $('#flexshift-maxvols').val().toString() + '">';
			formfields += '<input type="hidden" name="shift-regvols[]" value="0" /><input type="hidden" name="shift-new[]" value="Y" /><input type="hidden" name="shift-id[]" value="0" /></div>';
		
		$('#hidden-shift-fields').append(formfields);



		// Add on-click handler to new remove button
		$("#shift-table tbody tr:last-child td a.remove-shift").on("click", function(event){
			$('#hidden-shift-fields div:eq(' + $(this).parent().parent().index() + ')').remove();

			$(this).parent().parent().remove();
			if($('#shift-table tbody').children().length < 1) {
				$('#shift-table').hide();
				$('#remove-controls').hide();
				$('.done-adding').hide();
			}
		});

		$('.modal-footer #message').show();
		$('#shift-table').show();
		$('#remove-controls').show();
		
		var trans = $('#flexshift-add-flex').removeClass('btn-primary').addClass('btn-success').text('Added!');
		
		setTimeout(function() {
			trans.removeClass('btn-success').addClass('btn-primary').text('Add Shift');
		}, 2000);		
		
	});
	
	// Reqskills Radio Changed
	$('#reqskills-yes').change(function(){ $('#skills-group').slideDown(); });
	$('#reqskills-no').change(function(){ $('#skills-group').slideUp(); });
	
	
	// Kids Appropriate Changed
	$('#kids-appropriate-yes').change(function(){ $('#kids-group').slideDown(); });
	$('#kids-appropriate-no').change(function(){ $('#kids-group').slideUp(); });
	
	
	// Is Private Changed
	$('#is-private-yes').change(function(){ $('#private_key').slideDown(); });
	$('#is-private-no').change(function(){ $('#private_key').slideUp(); });
	
	
	// Add skill button click
	$("#add-skill").on("click", function(event){

			for (var ndx=0; ndx < $('#available-skills option:selected').length; ndx++) {
				$('#opp-skills').append(
					'<option value="' + $('#available-skills option:selected:eq('+ ndx +')').attr('value') +
					'">'+ $('#available-skills option:selected:eq('+ ndx +')').text() +'</option>'
				);
			}
			
			$('#available-skills option:selected').remove();
			
			// Repopulate hidden fields
			var hiding_skills = '';
			for (var ndx = 0; ndx < $('#opp-skills option').length; ndx++) {
				hiding_skills += '<input type="hidden" name="hidden-skills[]" value="' + $('#opp-skills option:eq(' + ndx +')').attr('value') + '" />';
			}
			$('#hidden-skills').html(hiding_skills);
			
	});
	
	// Remove skill button click
	$("#remove-skill").on("click", function(event){

		for (var ndx=0; ndx < $('#opp-skills option:selected').length; ndx++) {
			$('#available-skills').append(
				'<option value="' + $('#opp-skills option:selected:eq('+ ndx +')').attr('value') +
				'">'+ $('#opp-skills option:selected:eq('+ ndx +')').text() +'</option>'
			);
		}
		
		$('#opp-skills option:selected').remove();
		
		// Repopulate hidden fields
		var hiding_skills = '';			
		for (var ndx = 0; ndx < $('#opp-skills option').length; ndx++) {
			hiding_skills += '<input type="hidden" name="hidden-skills[]" value="' + $('#opp-skills option:eq(' + ndx +')').attr('value') + '" />';
		}
		$('#hidden-skills').html(hiding_skills);
		
	});	
	
	
	// Add cause button click
	$("#add-cause").on("click", function(event){

		if($('#available-causes option:selected').length + $('#opp-causes option').length <= 5) { 

			for (var ndx=0; ndx < $('#available-causes option:selected').length; ndx++) {
				$('#opp-causes').append(
					'<option value="' + $('#available-causes option:selected:eq('+ ndx +')').attr('value') +
					'">'+ $('#available-causes option:selected:eq('+ ndx +')').text() +'</option>'
				);
			}
			
			$('#available-causes option:selected').remove();
			
			// Repopulate hidden fields
			var hiding_causes = '';			
			for (var ndx = 0; ndx < $('#opp-causes option').length; ndx++) {
				hiding_causes += '<input type="hidden" name="hidden-causes[]" value="' + $('#opp-causes option:eq(' + ndx +')').attr('value') + '" />';
			}
			$('#hidden-causes').html(hiding_causes);

		} else alert('Please select no more than 5 causes.');
	});
	
	// Remove cause button click
	$("#remove-cause").on("click", function(event){

		for (var ndx=0; ndx < $('#opp-causes option:selected').length; ndx++) {
			$('#available-causes').append(
				'<option value="' + $('#opp-causes option:selected:eq('+ ndx +')').attr('value') +
				'">'+ $('#opp-causes option:selected:eq('+ ndx +')').text() +'</option>'
			);
		}
		
		$('#opp-causes option:selected').remove();
		
		// Repopulate hidden fields
		var hiding_causes = '';			
		for (var ndx = 0; ndx < $('#opp-causes option').length; ndx++) {
			hiding_causes += '<input type="hidden" name="hidden-causes[]" value="' + $('#opp-causes option:eq(' + ndx +')').attr('value') + '" />';
		}
		$('#hidden-causes').html(hiding_causes);
		
	});	
	
	function validateOpp(){
		var arrProblems = new Array();
		var problemCount = 0;
		
		// Make sure title is not empty
		if($('#title').val().length < 1){
			arrProblems[problemCount] = "You forgot to enter a title.";
			problemCount++;
		}
		
		// Make sure summary is not empty
		if($('#summary').val().length < 1){
			arrProblems[problemCount] = "You forgot to enter a summary.";
			problemCount++;
		}
		
		// Make sure at least one cause is selected
		if($('#available-causes option:selected').length + $('#opp-causes option').length < 1) { 
			arrProblems[problemCount] = "Please select at least one cause.";
			problemCount++;
		}
		
		// If other location is selected, check for valid address
		if($('#location').val() == 'other'){
			if($('#address1').val().length < 1 || $('#city').val().length < 1 || $('#zip').val().length != 5  ) {
				arrProblems[problemCount] = "Please enter a valid address.";
				problemCount++;
			}
		}
		
		// If opp is private, make sure there is a password
		if($('#is-private-yes').attr('checked') == 'checked'){
			
			if($('#private_key_input').val().length < 1) {
				arrProblems[problemCount] = "Please enter a password for this private opportunity.";
				problemCount++;
			}
		}
		
		// Make sure there's at least one shift
		if($('#shift-table tbody').children().length < 1) {
			arrProblems[problemCount] = "Please schedule at least one shift.";
			problemCount++;
		}
		
		
		if(problemCount > 0) {			
			var message = "There ";
			
			if(problemCount == 1) {message += "is a";}
			else {message += "are " + problemCount ;}
						
			if(problemCount == 1) {message += " problem:\n\n";}
			else {message += " problems:\n\n";}
			
			if(problemCount == 1) {
				for(ndx = 0; ndx < problemCount; ndx++){
					message += arrProblems[ndx] + "\n";
				}
			} else {
				for(ndx = 0; ndx < problemCount; ndx++) {
					message += (ndx + 1) + ". " + arrProblems[ndx] + "\n";
				}
			}
			
			alert(message);
			return false;
		}
		
	}
	
	// Opp Submit Click
	$('#submit-opp').click(validateOpp);	

});