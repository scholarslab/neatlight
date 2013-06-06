
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

$(function() {

  var divs = $('#neatline, #neatline-map, div.narrative');

  // Position the exhibit.
  var position = function() {
    divs.css({ height: $(window).height() });
    Neatline.execute('MAP:updateSize');
  };

  // Listen for resize.
  $(window).resize(function() {
    position();
  });

  position();

});
