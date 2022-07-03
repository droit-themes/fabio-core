<?php 
// Mega Menu select Control for ACF 
require_once __DIR__.'/mega-menu-select.php';

//  ACF icon fields 

require_once __DIR__.'/acf-icon-picker/acf-icon-fields.php';


function essential_themify_icons() {
    return [
        'ti-wand' => esc_html__( 'Wand', 'saasland-core'),
        'ti-volume' => esc_html__( 'Volume', 'saasland-core'),
        'ti-user' => esc_html__( 'User', 'saasland-core'),
        'ti-unlock' => esc_html__( 'Unlock', 'saasland-core'),
        'ti-unlink' => esc_html__( 'Unlink', 'saasland-core'),
        'ti-trash' => esc_html__( 'Trash', 'saasland-core'),
        'ti-thought' => esc_html__( 'Thought', 'saasland-core'),
        'ti-target' => esc_html__( 'Target', 'saasland-core'),
        'ti-tag' => esc_html__( 'Tag', 'saasland-core'),
        'ti-tablet' => esc_html__( 'Tablet', 'saasland-core'),
        'ti-star' => esc_html__( 'Star', 'saasland-core'),
        'ti-spray' => esc_html__( 'Spray', 'saasland-core'),
        'ti-shopping-cart-full' => esc_html__( 'Shopping Cart Full', 'saasland-core'),
        'ti-shopping-cart' => esc_html__( 'Shopping Cart', 'saasland-core'),
        'ti-settings' => esc_html__( 'Settings', 'saasland-core'),
        'ti-search' => esc_html__( 'Search', 'saasland-core'),
        'ti-zoom-in' => esc_html__( 'Zoom In', 'saasland-core'),
        'ti-zoom-out' => esc_html__( 'Zoom Out', 'saasland-core'),
        'ti-cut' => esc_html__( 'Cut', 'saasland-core'),
        'ti-ruler' => esc_html__( 'Ruler', 'saasland-core'),
        'ti-ruler-pencil' => esc_html__( 'Ruler Pencil', 'saasland-core'),
        'ti-ruler-alt' => esc_html__( 'Ruler alt', 'saasland-core'),
        'ti-bookmark' => esc_html__( 'Bookmark', 'saasland-core'),
        'ti-bookmark-alt' => esc_html__( 'Bookmark Alt', 'saasland-core'),
        'ti-reload' => esc_html__( 'Reload', 'saasland-core'),
        'ti-plus' => esc_html__( 'Plus', 'saasland-core'),
        'ti-pin' => esc_html__( 'Pin', 'saasland-core'),
        'ti-pencil' => esc_html__( 'Pencil', 'saasland-core'),
        'ti-pencil-alt' => esc_html__( 'Pencil Alt', 'saasland-core'),
        'ti-paint-roller' => esc_html__( 'Paint Roller', 'saasland-core'),
        'ti-paint-bucket' => esc_html__( 'Paint Bucket', 'saasland-core'),
        'ti-na' => esc_html__( 'Na', 'saasland-core'),
        'ti-mobile' => esc_html__( 'Mobile', 'saasland-core'),
        'ti-minus' => esc_html__( 'Minus', 'saasland-core'),
        'ti-medall' => esc_html__( 'Medall', 'saasland-core'),
        'ti-medall-alt' => esc_html__( 'Medall Alt', 'saasland-core'),
        'ti-marker' => esc_html__( 'Marker', 'saasland-core'),
        'ti-marker-alt' => esc_html__( 'Marker Alt', 'saasland-core'),
        'ti-arrow-up' => esc_html__( 'Arrow Up', 'saasland-core'),
        'ti-arrow-right' => esc_html__( 'Arrow Right', 'saasland-core'),
        'ti-arrow-left' => esc_html__( 'Arrow Left', 'saasland-core'),
        'ti-arrow-down' => esc_html__( 'Arrow Down', 'saasland-core'),
        'ti-lock' => esc_html__( 'Lock', 'saasland-core'),
        'ti-location-arrow' => esc_html__( 'Location Arrow', 'saasland-core'),
        'ti-link' => esc_html__( 'Link', 'saasland-core'),
        'ti-layout' => esc_html__( 'Layout', 'saasland-core'),
        'ti-layers' => esc_html__( 'Layers', 'saasland-core'),
        'ti-layers-alt' => esc_html__( 'Layers Alt', 'saasland-core'),
        'ti-key' => esc_html__( 'Key', 'saasland-core'),
        'ti-import' => esc_html__( 'Import', 'saasland-core'),
        'ti-image' => esc_html__( 'Image', 'saasland-core'),
        'ti-heart' => esc_html__( 'Heart', 'saasland-core'),
        'ti-heart-broken' => esc_html__( 'Heart Broken', 'saasland-core'),
        'ti-hand-stop' => esc_html__( 'Hand Stop', 'saasland-core'),
        'ti-hand-open' => esc_html__( 'Hand Open', 'saasland-core'),
        'ti-hand-drag' => esc_html__( 'Hand Drag', 'saasland-core'),
        'ti-folder' => esc_html__( 'Folder', 'saasland-core'),
        'ti-flag' => esc_html__( 'Flag', 'saasland-core'),
        'ti-flag-alt' => esc_html__( 'Flag Alt', 'saasland-core'),
        'ti-flag-alt-2' => esc_html__( 'Flag Alt 2', 'saasland-core'),
        'ti-eye' => esc_html__( 'Eye', 'saasland-core'),
        'ti-export' => esc_html__( 'Export', 'saasland-core'),
        'ti-exchange-vertical' => esc_html__( 'Exchange Vertical', 'saasland-core'),
        'ti-desktop' => esc_html__( 'Desktop', 'saasland-core'),
        'ti-cup' => esc_html__( 'Cup', 'saasland-core'),
        'ti-crown' => esc_html__( 'Crown', 'saasland-core'),
        'ti-comments' => esc_html__( 'Comments', 'saasland-core'),
        'ti-comment' => esc_html__( 'Comment', 'saasland-core'),
        'ti-comment-alt' => esc_html__( 'Comment Alt', 'saasland-core'),
        'ti-close' => esc_html__( 'Close', 'saasland-core'),
        'ti-clip' => esc_html__( 'Clip', 'saasland-core'),
        'ti-angle-up' => esc_html__( 'Angle Up', 'saasland-core'),
        'ti-angle-right' => esc_html__( 'Angle Right', 'saasland-core'),
        'ti-angle-left' => esc_html__( 'Angle Left', 'saasland-core'),
        'ti-angle-down' => esc_html__( 'Angle Down', 'saasland-core'),
        'ti-check' => esc_html__( 'Check', 'saasland-core'),
        'ti-check-box' => esc_html__( 'Check Box', 'saasland-core'),
        'ti-camera' => esc_html__( 'Camera', 'saasland-core'),
        'ti-announcement' => esc_html__( 'Announcement', 'saasland-core'),
        'ti-brush' => esc_html__( 'Brush', 'saasland-core'),
        'ti-briefcase' => esc_html__( 'Briefcase', 'saasland-core'),
        'ti-bolt' => esc_html__( 'Bolt', 'saasland-core'),
        'ti-bolt-alt' => esc_html__( 'Bolt Alt', 'saasland-core'),
        'ti-blackboard' => esc_html__( 'Blackboard', 'saasland-core'),
        'ti-bag' => esc_html__( 'Bag', 'saasland-core'),
        'ti-move' => esc_html__( 'Move', 'saasland-core'),
        'ti-arrows-vertical' => esc_html__( 'Arrows Vertical', 'saasland-core'),
        'ti-arrows-horizontal' => esc_html__( 'Arrows Horizontal', 'saasland-core'),
        'ti-fullscreen' => esc_html__( 'Fullscreen', 'saasland-core'),
        'ti-arrow-top-right' => esc_html__( 'Arrow Top Right', 'saasland-core'),
        'ti-arrow-top-left' => esc_html__( 'Arrow Top Left', 'saasland-core'),
        'ti-arrow-circle-up' => esc_html__( 'Arrow Circle Up', 'saasland-core'),
        'ti-arrow-circle-right' => esc_html__( 'Arrow Circle Right', 'saasland-core'),
        'ti-arrow-circle-left' => esc_html__( 'Arrow Circle Left', 'saasland-core'),
        'ti-arrow-circle-down' => esc_html__( 'Arrow Circle Down', 'saasland-core'),
        'ti-angle-double-up' => esc_html__( 'Angle Double Up', 'saasland-core'),
        'ti-angle-double-right' => esc_html__( 'Angle Double Right', 'saasland-core'),
        'ti-angle-double-left' => esc_html__( 'Angle Double Left', 'saasland-core'),
        'ti-angle-double-down' => esc_html__( 'Angle Double Down', 'saasland-core'),
        'ti-zip' => esc_html__( 'Zip', 'saasland-core'),
        'ti-world' => esc_html__( 'World', 'saasland-core'),
        'ti-wheelchair' => esc_html__( 'Wheelchair', 'saasland-core'),
        'ti-view-list' => esc_html__( 'View List', 'saasland-core'),
        'ti-view-list-alt' => esc_html__( 'View List Alt', 'saasland-core'),
        'ti-view-grid' => esc_html__( 'View Grid', 'saasland-core'),
        'ti-uppercase' => esc_html__( 'Uppercase', 'saasland-core'),
        'ti-upload' => esc_html__( 'Upload', 'saasland-core'),
        'ti-underline' => esc_html__( 'Underline', 'saasland-core'),
        'ti-truck' => esc_html__( 'Truck', 'saasland-core'),
        'ti-timer' => esc_html__( 'Timer', 'saasland-core'),
        'ti-ticket' => esc_html__( 'Ticket', 'saasland-core'),
        'ti-thumb-up' => esc_html__( 'Thumb Up', 'saasland-core'),
        'ti-thumb-down' => esc_html__( 'Thumb Down', 'saasland-core'),
        'ti-text' => esc_html__( 'Text', 'saasland-core'),
        'ti-stats-up' => esc_html__( 'Stats Up', 'saasland-core'),
        'ti-stats-down' => esc_html__( 'Stats Down', 'saasland-core'),
        'ti-split-v' => esc_html__( 'Split V', 'saasland-core'),
        'ti-split-h' => esc_html__( 'Split-h', 'saasland-core'),
        'ti-smallcap' => esc_html__( 'Smallcap', 'saasland-core'),
        'ti-shine' => esc_html__( 'Shine', 'saasland-core'),
        'ti-shift-right' => esc_html__( 'Shift Right', 'saasland-core'),
        'ti-shift-left' => esc_html__( 'Shift Left', 'saasland-core'),
        'ti-shield' => esc_html__( 'Shield', 'saasland-core'),
        'ti-notepad' => esc_html__( 'Notepad', 'saasland-core'),
        'ti-server' => esc_html__( 'Server', 'saasland-core'),
        'ti-quote-right' => esc_html__( 'Quote Right', 'saasland-core'),
        'ti-quote-left' => esc_html__( 'Quote Left', 'saasland-core'),
        'ti-pulse' => esc_html__( 'Pulse', 'saasland-core'),
        'ti-printer' => esc_html__( 'Printer', 'saasland-core'),
        'ti-power-off' => esc_html__( 'Power Off', 'saasland-core'),
        'ti-plug' => esc_html__( 'Plug', 'saasland-core'),
        'ti-pie-chart' => esc_html__( 'Pie Chart', 'saasland-core'),
        'ti-paragraph' => esc_html__( 'Paragraph', 'saasland-core'),
        'ti-panel' => esc_html__( 'Panel', 'saasland-core'),
        'ti-package' => esc_html__( 'Package', 'saasland-core'),
        'ti-music' => esc_html__( 'Music', 'saasland-core'),
        'ti-music-alt' => esc_html__( 'Music Alt', 'saasland-core'),
        'ti-mouse' => esc_html__( 'Mouse', 'saasland-core'),
        'ti-mouse-alt' => esc_html__( 'Mouse Alt', 'saasland-core'),
        'ti-money' => esc_html__( 'Money', 'saasland-core'),
        'ti-microphone' => esc_html__( 'Microphone', 'saasland-core'),
        'ti-menu' => esc_html__( 'Menu', 'saasland-core'),
        'ti-menu-alt' => esc_html__( 'Menu Alt', 'saasland-core'),
        'ti-map' => esc_html__( 'Map', 'saasland-core'),
        'ti-map-alt' => esc_html__( 'Map Alt', 'saasland-core'),
        'ti-loop' => esc_html__( 'Loop', 'saasland-core'),
        'ti-location-pin' => esc_html__( 'Location Pin', 'saasland-core'),
        'ti-list' => esc_html__( 'List', 'saasland-core'),
        'ti-light-bulb' => esc_html__( 'Light Bulb', 'saasland-core'),
        'ti-Italic' => esc_html__( 'Italic', 'saasland-core'),
        'ti-info' => esc_html__( 'Info', 'saasland-core'),
        'ti-infinite' => esc_html__( 'Infinite', 'saasland-core'),
        'ti-id-badge' => esc_html__( 'Badge', 'saasland-core'),
        'ti-hummer' => esc_html__( 'Hummer', 'saasland-core'),
        'ti-home' => esc_html__( 'Home', 'saasland-core'),
        'ti-help' => esc_html__( 'Help', 'saasland-core'),
        'ti-headphone' => esc_html__( 'Headphone', 'saasland-core'),
        'ti-harddrives' => esc_html__( 'Harddrives', 'saasland-core'),
        'ti-harddrive' => esc_html__( 'Harddrive', 'saasland-core'),
        'ti-gift' => esc_html__( 'Gift', 'saasland-core'),
        'ti-game' => esc_html__( 'Game', 'saasland-core'),
        'ti-filter' => esc_html__( 'Filter', 'saasland-core'),
        'ti-files' => esc_html__( 'Files', 'saasland-core'),
        'ti-file' => esc_html__( 'File', 'saasland-core'),
        'ti-eraser' => esc_html__( 'Eraser', 'saasland-core'),
        'ti-envelope' => esc_html__( 'Envelope', 'saasland-core'),
        'ti-download' => esc_html__( 'Download', 'saasland-core'),
        'ti-direction' => esc_html__( 'Direction', 'saasland-core'),
        'ti-direction-alt' => esc_html__( 'Direction Alt', 'saasland-core'),
        'ti-dashboard' => esc_html__( 'Dashboard', 'saasland-core'),
        'ti-control-stop' => esc_html__( 'Control Stop', 'saasland-core'),
        'ti-control-shuffle' => esc_html__( 'Control Shuffle', 'saasland-core'),
        'ti-control-play' => esc_html__( 'Control Play', 'saasland-core'),
        'ti-control-pause' => esc_html__( 'Control Pause', 'saasland-core'),
        'ti-control-forward' => esc_html__( 'Control Forward', 'saasland-core'),
        'ti-control-backward' => esc_html__( 'Control Backward', 'saasland-core'),
        'ti-cloud' => esc_html__( 'Cloud', 'saasland-core'),
        'ti-cloud-up' => esc_html__( 'Cloud-up', 'saasland-core'),
        'ti-cloud-down' => esc_html__( 'Cloud Down', 'saasland-core'),
        'ti-clipboard' => esc_html__( 'Clipboard', 'saasland-core'),
        'ti-car' => esc_html__( 'Car', 'saasland-core'),
        'ti-calendar' => esc_html__( 'Calendar', 'saasland-core'),
        'ti-book' => esc_html__( 'Book', 'saasland-core'),
        'ti-bell' => esc_html__( 'Bell', 'saasland-core'),
        'ti-basketball' => esc_html__( 'Basketball', 'saasland-core'),
        'ti-bar-chart' => esc_html__( 'Bar Chart', 'saasland-core'),
        'ti-bar-chart-alt' => esc_html__( 'Bar Chart Alt', 'saasland-core'),
        'ti-back-right' => esc_html__( 'Back Right', 'saasland-core'),
        'ti-back-left' => esc_html__( 'Back Left', 'saasland-core'),
        'ti-arrows-corner' => esc_html__( 'Arrows Corner', 'saasland-core'),
        'ti-archive' => esc_html__( 'Archive', 'saasland-core'),
        'ti-anchor' => esc_html__( 'Anchor', 'saasland-core'),
        'ti-align-right' => esc_html__( 'Align Right', 'saasland-core'),
        'ti-align-left' => esc_html__( 'Align Left', 'saasland-core'),
        'ti-align-justify' => esc_html__( 'Align Justify', 'saasland-core'),
        'ti-align-center' => esc_html__( 'Align Center', 'saasland-core'),
        'ti-alert' => esc_html__( 'Alert', 'saasland-core'),
        'ti-alarm-clock' => esc_html__( 'Alarm Clock', 'saasland-core'),
        'ti-agenda' => esc_html__( 'Agenda', 'saasland-core'),
        'ti-write' => esc_html__( 'Write', 'saasland-core'),
        'ti-window' => esc_html__( 'Window', 'saasland-core'),
        'ti-widgetized' => esc_html__( 'Widgetized', 'saasland-core'),
        'ti-widget' => esc_html__( 'Widget', 'saasland-core'),
        'ti-widget-alt' => esc_html__( 'Widget Alt', 'saasland-core'),
        'ti-wallet' => esc_html__( 'Wallet', 'saasland-core'),
        'ti-video-clapper' => esc_html__( 'Video Clapper', 'saasland-core'),
        'ti-video-camera' => esc_html__( 'Video Camera', 'saasland-core'),
        'ti-vector' => esc_html__( 'Vector', 'saasland-core'),
        'ti-themify-logo' => esc_html__( 'Themify Logo', 'saasland-core'),
        'ti-themify-favicon' => esc_html__( 'Themify Favicon', 'saasland-core'),
        'ti-themify-favicon-alt' => esc_html__( 'Themify Favicon Alt', 'saasland-core'),
        'ti-support' => esc_html__( 'Support', 'saasland-core'),
        'ti-stamp' => esc_html__( 'Stamp', 'saasland-core'),
        'ti-split-v-alt' => esc_html__( 'Split V Alt', 'saasland-core'),
        'ti-slice' => esc_html__( 'Slice', 'saasland-core'),
        'ti-shortcode' => esc_html__( 'Shortcode', 'saasland-core'),
        'ti-shift-right-alt' => esc_html__( 'Shift Right Alt', 'saasland-core'),
        'ti-shift-left-alt' => esc_html__( 'Shift Left Alt', 'saasland-core'),
        'ti-ruler-alt-2' => esc_html__( 'Ruler Alt 2', 'saasland-core'),
        'ti-receipt' => esc_html__( 'Receipt', 'saasland-core'),
        'ti-pin2' => esc_html__( 'Pin2', 'saasland-core'),
        'ti-pin-alt' => esc_html__( 'Pin Alt', 'saasland-core'),
        'ti-pencil-alt2' => esc_html__( 'Pencil Alt2', 'saasland-core'),
        'ti-palette' => esc_html__( 'Palette', 'saasland-core'),
        'ti-more' => esc_html__( 'More', 'saasland-core'),
        'ti-more-alt' => esc_html__( 'More Alt', 'saasland-core'),
        'ti-microphone-alt' => esc_html__( 'Microphone Alt', 'saasland-core'),
        'ti-magnet' => esc_html__( 'Magnet', 'saasland-core'),
        'ti-line-double' => esc_html__( 'Line Double', 'saasland-core'),
        'ti-line-dotted' => esc_html__( 'Line Dotted', 'saasland-core'),
        'ti-line-dashed' => esc_html__( 'Line Dashed', 'saasland-core'),
        'ti-layout-width-full' => esc_html__( 'Layout Width Full', 'saasland-core'),
        'ti-layout-width-default' => esc_html__( 'Layout Width Default', 'saasland-core'),
        'ti-layout-width-default-alt' => esc_html__( 'Layout Width Default Alt', 'saasland-core'),
        'ti-layout-tab' => esc_html__( 'Layout Tab', 'saasland-core'),
        'ti-layout-tab-window' => esc_html__( 'Layout Tab Window', 'saasland-core'),
        'ti-layout-tab-v' => esc_html__( 'Layout Tab V', 'saasland-core'),
        'ti-layout-tab-min' => esc_html__( 'Layout Tab Min', 'saasland-core'),
        'ti-layout-slider' => esc_html__( 'Layout Slider', 'saasland-core'),
        'ti-layout-slider-alt' => esc_html__( 'Layout Slider Alt', 'saasland-core'),
        'ti-layout-sidebar-right' => esc_html__( 'Layout Sidebar Right', 'saasland-core'),
        'ti-layout-sidebar-none' => esc_html__( 'Layout Sidebar None', 'saasland-core'),
        'ti-layout-sidebar-left' => esc_html__( 'Layout Sidebar Left', 'saasland-core'),
        'ti-layout-placeholder' => esc_html__( 'Layout Placeholder', 'saasland-core'),
        'ti-layout-menu' => esc_html__( 'Layout Menu', 'saasland-core'),
        'ti-layout-menu-v' => esc_html__( 'layout Menu V', 'saasland-core'),
        'ti-layout-menu-separated' => esc_html__( 'Layout Menu Separated', 'saasland-core'),
        'ti-layout-menu-full' => esc_html__( 'Layout Menu Full', 'saasland-core'),
        'ti-layout-media-right-alt' => esc_html__( 'Layout Media Right Alt', 'saasland-core'),
        'ti-layout-media-right' => esc_html__( 'Layout Media Right', 'saasland-core'),
        'ti-layout-media-overlay' => esc_html__( 'Layout Media Overlay', 'saasland-core'),
        'ti-layout-media-overlay-alt' => esc_html__( 'Layout Media Overlay Alt', 'saasland-core'),
        'ti-layout-media-overlay-alt-2' => esc_html__( 'Layout Media Overlay Alt 2', 'saasland-core'),
        'ti-layout-media-left-alt' => esc_html__( 'Layout Media Left Alt', 'saasland-core'),
        'ti-layout-media-left' => esc_html__( 'Layout Media Left', 'saasland-core'),
        'ti-layout-media-center-alt' => esc_html__( 'Layout Media Center Alt', 'saasland-core'),
        'ti-layout-media-center' => esc_html__( 'Layout Media Center', 'saasland-core'),
        'ti-layout-list-thumb' => esc_html__( 'Layout List Thumb', 'saasland-core'),
        'ti-layout-list-thumb-alt' => esc_html__( 'Layout List Thumb Alt', 'saasland-core'),
        'ti-layout-list-post' => esc_html__( 'Layout List Post', 'saasland-core'),
        'ti-layout-list-large-image' => esc_html__( 'Layout List Large Image', 'saasland-core'),
        'ti-layout-line-solid' => esc_html__( 'Layout Line Solid', 'saasland-core'),
        'ti-layout-grid4' => esc_html__( 'Layout Grid4', 'saasland-core'),
        'ti-layout-grid3' => esc_html__( 'Layout Grid3', 'saasland-core'),
        'ti-layout-grid2' => esc_html__( 'Layout Grid2', 'saasland-core'),
        'ti-layout-grid2-thumb' => esc_html__( 'Layout Grid2 Thumb', 'saasland-core'),
        'ti-layout-cta-right' => esc_html__( 'Layout Cta Right', 'saasland-core'),
        'ti-layout-cta-left' => esc_html__( 'Layout Cta Left', 'saasland-core'),
        'ti-layout-cta-center' => esc_html__( 'Layout Cta Center', 'saasland-core'),
        'ti-layout-cta-btn-right' => esc_html__( 'Layout Cta Btn Right', 'saasland-core'),
        'ti-layout-cta-btn-left' => esc_html__( 'Layout Cta Btn Left', 'saasland-core'),
        'ti-layout-column4' => esc_html__( 'Layout Column4', 'saasland-core'),
        'ti-layout-column3' => esc_html__( 'Layout Column3', 'saasland-core'),
        'ti-layout-column2' => esc_html__( 'Layout Column2', 'saasland-core'),
        'ti-layout-accordion-separated' => esc_html__( 'Layout Accordion Separated', 'saasland-core'),
        'ti-layout-accordion-merged' => esc_html__( 'Layout Accordion Merged', 'saasland-core'),
        'ti-layout-accordion-list' => esc_html__( 'Layout Accordion List', 'saasland-core'),
        'ti-ink-pen' => esc_html__( 'Ink Pen', 'saasland-core'),
        'ti-info-alt' => esc_html__( 'Info Alt', 'saasland-core'),
        'ti-help-alt' => esc_html__( 'Help Alt', 'saasland-core'),
        'ti-headphone-alt' => esc_html__( 'Headphone Alt', 'saasland-core'),
        'ti-hand-point-up' => esc_html__( 'Hand Point Up', 'saasland-core'),
        'ti-hand-point-right' => esc_html__( 'Hand Point Right', 'saasland-core'),
        'ti-hand-point-left' => esc_html__( 'Hand Point Left', 'saasland-core'),
        'ti-hand-point-down' => esc_html__( 'Hand Point Down', 'saasland-core'),
        'ti-gallery' => esc_html__( 'Gallery', 'saasland-core'),
        'ti-face-smile' => esc_html__( 'Face Smile', 'saasland-core'),
        'ti-face-sad' => esc_html__( 'Face Sad', 'saasland-core'),
        'ti-credit-card' => esc_html__( 'Credit Card', 'saasland-core'),
        'ti-control-skip-forward' => esc_html__( 'Control Skip Forward', 'saasland-core'),
        'ti-control-record' => esc_html__( 'Control Record', 'saasland-core'),
        'Control-eject' => esc_html__( 'Control Eject', 'saasland-core'),
        'ti-comments-smiley' => esc_html__( 'Comments Smiley', 'saasland-core'),
        'ti-brush-alt' => esc_html__( 'Brush Alt', 'saasland-core'),
        'ti-youtube' => esc_html__( 'Youtube', 'saasland-core'),
        'ti-vimeo' => esc_html__( 'Vimeo', 'saasland-core'),
        'ti-twitter' => esc_html__( 'Twitter', 'saasland-core'),
        'ti-time' => esc_html__( 'Time', 'saasland-core'),
        'ti-tumblr' => esc_html__( 'Tumblr', 'saasland-core'),
        'ti-skype' => esc_html__( 'Skype', 'saasland-core'),
        'ti-share' => esc_html__( 'Share', 'saasland-core'),
        'ti-share-alt' => esc_html__( 'Share Alt', 'saasland-core'),
        'ti-rocket' => esc_html__( 'Rocket', 'saasland-core'),
        'ti-pinterest' => esc_html__( 'Pinterest', 'saasland-core'),
        'ti-new-window' => esc_html__( 'New Window', 'saasland-core'),
        'ti-microsoft' => esc_html__( 'Microsoft', 'saasland-core'),
        'ti-list-ol' => esc_html__( 'List Ol', 'saasland-core'),
        'ti-linkedin' => esc_html__( 'Linkedin', 'saasland-core'),
        'ti-layout-sidebar-2' => esc_html__( 'Layout Sidebar-2', 'saasland-core'),
        'ti-layout-grid4-alt' => esc_html__( 'Layout Grid4 Alt', 'saasland-core'),
        'ti-layout-grid3-alt' => esc_html__( 'Layout Grid3 Alt', 'saasland-core'),
        'ti-layout-grid2-alt' => esc_html__( 'Layout Grid2 Alt', 'saasland-core'),
        'ti-layout-column4-alt' => esc_html__( 'Layout Column4 Alt', 'saasland-core'),
        'ti-layout-column3-alt' => esc_html__( 'Layout Column3 Alt', 'saasland-core'),
        'ti-layout-column2-alt' => esc_html__( 'Layout Column2 Alt', 'saasland-core'),
        'ti-instagram' => esc_html__( 'Instagram', 'saasland-core'),
        'ti-google' => esc_html__( 'Google', 'saasland-core'),
        'ti-github' => esc_html__( 'Github', 'saasland-core'),
        'ti-flickr' => esc_html__( 'Flickr', 'saasland-core'),
        'ti-facebook' => esc_html__( 'Facebook', 'saasland-core'),
        'ti-dropbox' => esc_html__( 'Dropbox', 'saasland-core'),
        'ti-dribbble' => esc_html__( 'Dribbble', 'saasland-core'),
        'ti-apple' => esc_html__( 'Apple', 'saasland-core'),
        'ti-android' => esc_html__( 'Android', 'saasland-core'),
        'ti-save' => esc_html__( 'Save', 'saasland-core'),
        'ti-save-alt' => esc_html__( 'Save Alt', 'saasland-core'),
        'ti-yahoo' => esc_html__( 'Yahoo', 'saasland-core'),
        'ti-wordpress' => esc_html__( 'Wordpress', 'saasland-core'),
        'ti-vimeo-alt' => esc_html__( 'Vimeo Alt', 'saasland-core'),
        'ti-twitter-alt' => esc_html__( 'Twitter Alt', 'saasland-core'),
        'ti-tumblr-alt' => esc_html__( 'Tumblr Alt', 'saasland-core'),
        'ti-trello' => esc_html__( 'Trello', 'saasland-core'),
        'ti-stack-overflow' => esc_html__( 'Stack Overflow', 'saasland-core'),
        'ti-soundcloud' => esc_html__( 'Soundcloud', 'saasland-core'),
        'ti-sharethis' => esc_html__( 'Sharethis', 'saasland-core'),
        'ti-sharethis-alt' => esc_html__( 'Sharethis Alt', 'saasland-core'),
        'ti-reddit' => esc_html__( 'Reddit', 'saasland-core'),
        'ti-pinterest-alt' => esc_html__( 'Pinterest Alt', 'saasland-core'),
        'ti-microsoft-alt' => esc_html__( 'Microsoft Alt', 'saasland-core'),
        'ti-linux' => esc_html__( 'Linux', 'saasland-core'),
        'ti-jsfiddle' => esc_html__( 'Jsfiddle', 'saasland-core'),
        'ti-joomla' => esc_html__( 'Joomla', 'saasland-core'),
        'ti-html5' => esc_html__( 'Html5', 'saasland-core'),
        'ti-flickr-alt' => esc_html__( 'Flickr Alt', 'saasland-core'),
        'ti-email' => esc_html__( 'Email', 'saasland-core'),
        'ti-drupal' => esc_html__( 'Drupal', 'saasland-core'),
        'ti-dropbox-alt' => esc_html__( 'Dropbox Alt', 'saasland-core'),
        'ti-css3' => esc_html__( 'Css3', 'saasland-core'),
        'ti-rss' => esc_html__( 'Rss', 'saasland-core'),
        'ti-rss-alt' => esc_html__( 'Rss-alt', 'saasland-core')
    ];
}