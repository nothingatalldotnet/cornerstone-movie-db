var General = {

    init: function(e) {
        this.initIso();
		this.bindEvents();
    },

    bindEvents: function() {
		jQuery('body').on('change', '.sort', General.doIso);
    },

    initIso: function() {
		jQuery('.content-wrapper').isotope({
			itemSelector: '.film',
			layoutMode: 'fitRows',
			percentPosition: true,
			sortAscending : false,
			getSortData: {
				title: '.title',
				popularity: '.pop'
			}
		});
    },


    doIso: function(e) {
    	var sort = jQuery('.sorter').val(),
    		filter = jQuery('.filter').val();

    	var sort_by, sort_dir, filter_by;

console.log(sort);

    	// sort
    	if(sort === 'pop-asc') {
    		sort_by = 'popularity';
    		sort_dir = true;
    	} else if(sort === 'pop-desc') {
    		sort_by = 'popularity';
    		sort_dir = false;
    	} else if(sort === 'title-asc') {
    		sort_by = 'title';
    		sort_dir = true;
    	} else if(sort === 'title-desc') {
    		sort_by = 'title';
    		sort_dir = false;
    	} else {
    		sort_by = 'title';
    		sort_dir = true;
    	}

		filter_by = filter;
		if(filter_by == 'all') {
			filter_by = '*';
		} else {
			filter_by = '.'+filter_by;
		}

	 jQuery('.content-wrapper').isotope({ sortBy: sort_by, sortAscending: sort_dir });
		// jQuery('.content-wrapper').isotope({ sortBy: sort_by, sortAscending: sort_dir, filter: filter_by });
    }
};

jQuery(function(){
    General.init();
});
