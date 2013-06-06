
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

$(function() {

  var exhibit = $('#neatline, #neatline-map');
  var wrapper = $('div.narrative');

  // Position the exhibit.
  var position = function() {

    var h = $(window).height();
    var w = wrapper.width();

    exhibit.css({ height: h, width: w });
    Neatline.execute('MAP:updateSize');

  };

  // Listen for resize.
  $(window).resize(function() {
    position();
  });

  position();

});
