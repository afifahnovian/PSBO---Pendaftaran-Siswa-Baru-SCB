
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var nonvalid;

$(".next").click(function(){
	nonvalid = false;
	$("#fieldform"+this.id+" :input").each(function(){
		if(!($(this).valid())){
			nonvalid = true;
		}
	})
	// break if nonvalid
	if(nonvalid) return false;
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
		'transform': 'scale('+scale+')',
		'position': 'absolute'
	});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

// $(".submit").click(function(){
// 	return true;
// })

// multiform add dynamically
var room = 1;
function prestasi_fields() {
    room++;
    var objTo = document.getElementById('prestasi_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
	divtest.innerHTML = '<div class="form-row"><div class="col-sm-4 nopadding"><div class="form-group"><input type="text" class="form-control" id="jenis_lomba" name="jenis_lomba" value="" placeholder="Jenis Lomba"></div></div><div class="col-sm-4 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="tingkat_Lomba" name="tingkat_Lomba"><option value="">Tingkat Lomba</option><option value="sekolah">Sekolah</option><option value="kecamatan">Kecamatan</option><option value="kabupaten">Kabupaten</option><option value="provinsi">Provinsi</option><option value="nasional">Nasional</option></select></div></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="peringkat" name="peringkat" value="" placeholder="Peringkat"></div></div><div class="col-sm-1" style="float: right"><div class="input-group-btn"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="fas fa-minus" aria-hidden="true></span> </button></div></div><div class="clear"></div></div>'
	objTo.appendChild(divtest)
}

function remove_prestasi_fields(rid) {
	$('.removeclass'+rid).remove();
}

// naming file
$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

