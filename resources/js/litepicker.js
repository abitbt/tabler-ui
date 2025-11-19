/**
 * Litepicker - Date Picker Library
 *
 * This module imports and initializes Litepicker for use in the application.
 * Litepicker is used by the <tabler:date-picker> Blade component.
 *
 * The Litepicker instance is attached to the window object to make it
 * globally available for Blade component initialization scripts.
 */

import Litepicker from 'litepicker';

// Make Litepicker available globally for Blade components
window.Litepicker = Litepicker;

// Export for ES6 module usage
export default Litepicker;
