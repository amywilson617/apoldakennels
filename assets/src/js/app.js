jQuery ( function($) {
    var site = new SiteController($);
    site.init();
});

function SiteController($) {
    self.init = function() {
        initFitVids();
    }

    function initFitVids() {
      $('iframe[src*="youtube"]').parent().fitVids();
    }

    return self;
}
