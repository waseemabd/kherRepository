$(document).ready(function() {
	$('.select2').select2({
		placeholder: 'Choose one',
		searchInputPlaceholder: 'Search',
		 width: '100%'
	});
	$('.select2-no-search').select2({
		minimumResultsForSearch: Infinity,
		placeholder: 'Choose one',
		width: '100%'
	});
    $(".selection").select2({
        language: "ar",
		dir: 'rtl',
	  })
   
    $(".select2-diploma").select2({
		placeholder: 'اختر شهادة دبلوم واحدة',
	  });

    $(".select2-teacher").select2({
        dir: "rtl",
		placeholder: 'اختر المدرس ',
	  });
    $(".select2-type").select2({
		placeholder: 'اختر اasdasdلنوع ',
	  });
    $(".select2-course .select2-selection__placeholder").select2({
		placeholder: 'اختر الكورس ',
	  });
    $(".select2-studen").select2({
		placeholder: 'اختر الطلاب ',
	  });


   
  
      
	function formatState (state) {
	  if (!state.id) { return state.text; }
	  var $state = $(
		'<span><img src="../assets/plugins/flag-icon-css/flags/4x3/' +  state.element.value.toLowerCase() +
	'.svg" class="img-flag" /> ' +
	state.text +  '</span>'
	 );
	 return $state;
	};

	$(".select2-flag-search").select2({
	  templateResult: formatState,
	  templateSelection: formatState,
	   escapeMarkup: function(m) { return m; }
	});
	
});
