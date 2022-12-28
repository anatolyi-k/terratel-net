import{a as v}from"./vuex.esm.19624049.js";import{B as g}from"./Checkbox.1903802a.js";import{B as m}from"./RadioToggle.2a5182bd.js";import{C as b}from"./index.499c6591.js";import{C as r}from"./Card.184c54d2.js";import{C as f}from"./SettingsRow.d7400549.js";import{C as y}from"./AttributesList.edac0fa6.js";import{C as x}from"./DisplayInfo.50334c97.js";import{n}from"./vueComponentNormalizer.67c9b86e.js";import{A as O,U as C}from"./UpdateCta.2409f854.js";import{C as S}from"./Blur.920c6287.js";import{R as w}from"./RequiredPlans.45ec8f47.js";import{C as H}from"./ProBadge.3e5c17e9.js";import{C as k}from"./Index.dfac14e0.js";import{A as D}from"./WpTable.61e73015.js";import"./index.c630c4a6.js";import"./SaveChanges.68e73792.js";import"./Checkmark.cdcd77fe.js";import"./client.90beecd8.js";import"./_commonjsHelpers.10c44588.js";import"./translations.3bc9d58c.js";import"./default-i18n.0e73c33c.js";import"./Caret.eeb84d06.js";import"./constants.e179df36.js";import"./isArrayLikeObject.44af21ce.js";import"./helpers.8308b279.js";import"./portal-vue.esm.18ed59c3.js";import"./Tooltip.d723c3c3.js";import"./Slide.9538a421.js";import"./Row.2d17f2cd.js";import"./Php.0d7fbf10.js";import"./CheckSolid.30c4f3b2.js";import"./attachments.90c241a0.js";import"./cleanForSlug.652f2bfe.js";import"./html.9a057d5c.js";import"./Index.cb09fd7a.js";var R=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("core-display-info",{attrs:{label:t.label,options:t.displayOptions},scopedSlots:t._u([{key:"shortcodeAdvanced",fn:function(){return[s("core-attributes-list",{attrs:{description:t.strings.shortcodeAttributesDescription,attributes:t.attributes}})]},proxy:!0},{key:"phpAdvanced",fn:function(){return[s("core-attributes-list",{attrs:{description:t.strings.phpArgumentsDescription,attributes:t.attributes}})]},proxy:!0}])})},T=[];const L={components:{CoreAttributesList:y,CoreDisplayInfo:x},props:{label:null,displayOptions:{type:Object,required:!0}},data(){return{strings:{shortcodeAttributesDescription:this.$t.__("The following shortcode attributes can be used to override the default settings:",this.$td),phpArgumentsDescription:this.$t.__("The function accepts an associative array with the following arguments that can be used to override the default settings:",this.$td),advancedSettings:this.$t.__("Advanced Settings",this.$td)},attributes:[{name:"location_id",description:this.$t.__("A Location ID if Multiple Locations is on.",this.$td)},{name:"show_title",description:this.$t.__("Show or hide the title.",this.$td)},{name:"show_icons",description:this.$t.__("Show or hide icons ( address, phone, fax, email ).",this.$td)},{name:"show_monday",description:this.$t.__("Show or hide the monday hours.",this.$td)},{name:"show_tuesday",description:this.$t.__("Show or hide the tuesday hours.",this.$td)},{name:"show_wednesday",description:this.$t.__("Show or hide the wednesday hours.",this.$td)},{name:"show_thursday",description:this.$t.__("Show or hide the thursday hours.",this.$td)},{name:"show_friday",description:this.$t.__("Show or hide the friday hours.",this.$td)},{name:"show_saturday",description:this.$t.__("Show or hide the saturday hours.",this.$td)},{name:"show_sunday",description:this.$t.__("Show or hide the sunday hours.",this.$td)},{name:"label",description:this.$t.__("The label.",this.$td)}]}}},c={};var A=n(L,R,T,!1,z,null,null,null);function z(t){for(let e in c)this[e]=c[e]}const F=function(){return A.exports}();var M=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-opening-hours"},[s("core-card",{attrs:{slug:"localBusinessOpeningHours","header-text":t.strings.openingHours}},[s("core-settings-row",{staticClass:"info-openinghours-row",attrs:{name:t.strings.showOpeningHours,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("base-radio-toggle",{attrs:{name:"openingHours",options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]},model:{value:t.getDataObject().show,callback:function(a){t.$set(t.getDataObject(),"show",a)},expression:"getDataObject().show"}})],1)]},proxy:!0}])}),s("local-business-opening-hours-display-info",{attrs:{label:t.strings.displayOpeningHours,displayOptions:t.displayInfo}}),t.getDataObject().show&&t.isMultipleLocations()&&t.$aioseo.license.isActive?s("core-settings-row",{attrs:{name:t.strings.defaultLocationSettings,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-alert",{domProps:{innerHTML:t._s(t.strings.closedLabelIntro)}})]},proxy:!0}],null,!1,496858497)}):t._e(),t.getDataObject().show?s("core-settings-row",{staticClass:"info-labels-row",attrs:{name:t.strings.labels,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("span",{staticClass:"field-description mt-8"},[t._v(t._s(t.strings.open24Label))]),s("base-input",{attrs:{size:"medium"},model:{value:t.getDataObject().labels.alwaysOpen,callback:function(a){t.$set(t.getDataObject().labels,"alwaysOpen",a)},expression:"getDataObject().labels.alwaysOpen"}}),s("div",{staticClass:"aioseo-description"},[t._v(t._s(t.strings.open24LabelDesc))])],1),s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("span",{staticClass:"field-description"},[t._v(t._s(t.strings.closedLabel))]),s("base-input",{attrs:{type:"text",size:"medium"},model:{value:t.getDataObject().labels.closed,callback:function(a){t.$set(t.getDataObject().labels,"closed",a)},expression:"getDataObject().labels.closed"}}),s("div",{staticClass:"aioseo-description"},[t._v(t._s(t.strings.closedLabelDesc))])],1)]},proxy:!0}],null,!1,609632856)}):t._e(),t.getDataObject().show?s("core-settings-row",{staticClass:"info-settings-row",attrs:{name:"Settings",align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("base-toggle",{model:{value:t.getDataObject().alwaysOpen,callback:function(a){t.$set(t.getDataObject(),"alwaysOpen",a)},expression:"getDataObject().alwaysOpen"}},[t._v(" "+t._s(t.strings.open247)+" ")])],1),s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left mt-16"},[t.getDataObject().alwaysOpen?t._e():s("base-toggle",{model:{value:t.getDataObject().use24hFormat,callback:function(a){t.$set(t.getDataObject(),"use24hFormat",a)},expression:"getDataObject().use24hFormat"}},[t._v(" "+t._s(t.strings.use24hFormat)+" ")])],1)]},proxy:!0}],null,!1,1790874724)}):t._e(),t.getDataObject().show&&!t.getDataObject().alwaysOpen?s("core-settings-row",{staticClass:"info-hours-row",attrs:{name:t.strings.hours,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},t._l(t.weekdays,function(a,o){return s("div",{key:o,staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(a)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{disabled:t.getWeekDay(o).open24h||t.getWeekDay(o).closed,size:"medium",options:t.getDataObject().use24hFormat?t.$constants.HOURS_24H_FORMAT:t.$constants.HOURS_12H_FORMAT,value:t.getSelectOptions(t.getWeekDay(o).openTime)},on:{input:function(i){return t.saveDay(o,"openTime",i.value)}}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{disabled:t.getWeekDay(o).open24h||t.getWeekDay(o).closed,size:"medium",options:t.getDataObject().use24hFormat?t.$constants.HOURS_24H_FORMAT:t.$constants.HOURS_12H_FORMAT,value:t.getSelectOptions(t.getWeekDay(o).closeTime)},on:{input:function(i){return t.saveDay(o,"closeTime",i.value)}}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{disabled:t.getWeekDay(o).closed,size:"medium"},model:{value:t.getWeekDay(o).open24h,callback:function(i){t.$set(t.getWeekDay(o),"open24h",i)},expression:"getWeekDay(index).open24h"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"},model:{value:t.getWeekDay(o).closed,callback:function(i){t.$set(t.getWeekDay(o),"closed",i)},expression:"getWeekDay(index).closed"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)])}),0)]},proxy:!0}],null,!1,3629777455)}):t._e()],1)],1)},j=[];const U={components:{BaseCheckbox:g,BaseRadioToggle:m,CoreAlert:b,CoreCard:r,CoreSettingsRow:f,LocalBusinessOpeningHoursDisplayInfo:F},data(){return{displayInfo:{block:{copy:"",desc:this.$t.sprintf(this.$t.__('To add this block, edit a page or post and search for the "%1$s Local - Opening Hours" block.',this.$td),"AIOSEO")},shortcode:{copy:"[aioseo_local_opening_hours]",desc:this.$t.sprintf(this.$t.__("Use the following shortcode to display the opening hours info. %1$s",this.$td),this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"localSeoShortcodeOpeningHours",!0))},widget:{copy:"",desc:this.$t.sprintf(this.$t.__('To add this widget, visit the %1$swidgets page%2$s and look for the "%3$s Local - Opening Hours" widget.',this.$td),`<a href="${this.$aioseo.urls.admin.widgets}" target="_blank">`,"</a>","AIOSEO")},php:{copy:"<?php if( function_exists( 'aioseo_local_opening_hours' ) ) aioseo_local_opening_hours(); ?>",desc:this.$t.sprintf(this.$t.__("Use the following PHP code anywhere in your theme to display the opening hours. %1$s",this.$td),this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"localSeoFunctionOpeningHours",!0))}},strings:{openingHours:this.$t.__("Opening Hours Settings",this.$td),showOpeningHours:this.$t.__("Show Opening Hours",this.$td),displayOpeningHours:this.$t.__("Display Opening Hours",this.$td),labels:this.$t.__("Labels",this.$td),defaultLocationSettings:this.$t.__("Default Location Settings",this.$td),closedLabel:this.$t.__("Closed",this.$td),closedLabelDesc:this.$t.__("Displayed when the business is closed.",this.$td),closedLabelIntro:this.$t.sprintf(this.$t.__("Below are the default settings for all locations, which can be overwritten per %1$slocation%2$s.",this.$td),`<a href="${this.$aioseo.localBusiness.postTypeEditLink}">`,"</a>"),alwaysOpenLabel:this.$t.__("Open 24h label",this.$td),open24LabelDesc:this.$t.__("Displayed when the business is open all day long.",this.$td),open24Label:this.$t.__("Open 24h",this.$td),open247:this.$t.__("Open 24/7",this.$td),use24hFormat:this.$t.__("Use 24h format",this.$td),timezone:this.$t.__("Timezone",this.$td),selectTimeZone:this.$t.__("Select your timezone",this.$td),hours:this.$t.__("Hours",this.$td),open24h:this.$t.__("Open 24h",this.$td),closed:this.$t.__("Closed",this.$td)},weekdays:{monday:this.$t.__("Monday",this.$td),tuesday:this.$t.__("Tuesday",this.$td),wednesday:this.$t.__("Wednesday",this.$td),thursday:this.$t.__("Thursday",this.$td),friday:this.$t.__("Friday",this.$td),saturday:this.$t.__("Saturday",this.$td),sunday:this.$t.__("Sunday",this.$td)}}},computed:{...v(["currentPost","options"])},methods:{isMultipleLocations(){return this.$root._data.screenContext==="metabox"?this.currentPost.local_seo.locations.general.multiple:this.options.localBusiness.locations.general.multiple},getDataObject(){return this.$root._data.screenContext==="metabox"?this.currentPost.local_seo.openingHours:this.options.localBusiness.openingHours},getSelectOptions(t){return this.getDataObject().use24hFormat?this.$constants.HOURS_24H_FORMAT.find(e=>e.value===t):this.$constants.HOURS_12H_FORMAT.find(e=>e.value===t)},getSelectTimezone(t){return this.$constants.TIMEZONES.find(e=>e.value===t)},saveDay(t,e,s){this.$set(this.getDataObject().days[t],e,s)},saveTimezone(t){this.$set(this.getDataObject(),"timezone",t)},getWeekDay(t){return this.getDataObject().days[t]}}},u={};var B=n(U,M,j,!1,I,null,null,null);function I(t){for(let e in u)this[e]=u[e]}const W=function(){return B.exports}();var E=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-opening-hours-blur"},[s("core-blur",[s("core-settings-row",{staticClass:"info-openinghours-row",attrs:{name:t.strings.showOpeningHours,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("base-radio-toggle",{attrs:{name:"openingHours",value:!0,options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]}})],1)]},proxy:!0}])}),s("core-settings-row",{staticClass:"info-hours-row",attrs:{name:t.strings.hours,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("base-toggle",[t._v(" "+t._s(t.strings.open247)+" ")])],1),s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left mt-16"},[s("base-toggle",[t._v(" "+t._s(t.strings.use24hFormat)+" ")])],1),s("div",{staticClass:"aioseo-col col-xs-12 text-xs-left"},[s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.monday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.tuesday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.wednesday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.thursday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.friday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.saturday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)]),s("div",{staticClass:"aioseo-col-flex text-xs-left"},[s("div",{staticClass:"aioseo-col-day text-xs-left"},[t._v(" "+t._s(t.strings.sunday)+" ")]),s("div",{staticClass:"aioseo-col-hours text-xs-left"},[s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"09:00"}}),s("span",{staticClass:"separator"},[t._v("-")]),s("base-select",{attrs:{size:"medium",options:t.$constants.HOURS_24H_FORMAT,value:"17:00"}})],1),s("div",{staticClass:"aioseo-col-alwaysopen text-xs-left"},[s("base-checkbox",{attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.open24h)+" ")]),s("base-checkbox",{staticClass:"closed-label",attrs:{size:"medium"}},[t._v(" "+t._s(t.strings.closed)+" ")])],1)])])]},proxy:!0}])})],1)],1)},G=[];const P={components:{BaseCheckbox:g,BaseRadioToggle:m,CoreBlur:S,CoreSettingsRow:f},data(){return{strings:{showOpeningHours:this.$t.__("Show Opening Hours",this.$td),displayOpeningHours:this.$t.__("Display Opening Hours",this.$td),labels:this.$t.__("Labels",this.$td),closedLabel:this.$t.__("Closed label",this.$td),closedLabelDesc:this.$t.__("Text to display when 'Closed' setting is checked",this.$td),alwaysOpenLabel:this.$t.__("Open 24h label",this.$td),alwaysOpenLabelDesc:this.$t.__("Text to display when 'Open 24h' setting is checked",this.$td),open247:this.$t.__("Open 24/7",this.$td),use24hFormat:this.$t.__("Use 24h format",this.$td),timezone:this.$t.__("Timezone",this.$td),selectTimeZone:this.$t.__("Select your timezone:",this.$td),hours:this.$t.__("Opening Hours",this.$td),monday:this.$t.__("Monday",this.$td),tuesday:this.$t.__("Tuesday",this.$td),wednesday:this.$t.__("Wednesday",this.$td),thursday:this.$t.__("Thursday",this.$td),friday:this.$t.__("Friday",this.$td),saturday:this.$t.__("Saturday",this.$td),sunday:this.$t.__("Sunday",this.$td),open24h:this.$t.__("Open 24h",this.$td),closed:this.$t.__("Closed",this.$td)}}}},d={};var N=n(P,E,G,!1,q,null,null,null);function q(t){for(let e in d)this[e]=d[e]}const l=function(){return N.exports}();var Z=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("core-card",{attrs:{slug:"localBusinessOpeningHours","header-text":t.strings.openingHours,noSlide:!0}},[s("blur"),s("activate-cta",{attrs:{"align-top":!0}})],1)],1)},K=[];const J={components:{ActivateCta:O,Blur:l,CoreCard:r},data(){return{strings:{openingHours:this.$t.__("Opening Hours Settings",this.$td)}}}},_={};var Q=n(J,Z,K,!1,V,null,null,null);function V(t){for(let e in _)this[e]=_[e]}const X=function(){return Q.exports}();var Y=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-opening-hours"},[s("core-card",{attrs:{slug:"localBusinessOpeningHours",noSlide:!0},scopedSlots:t._u([{key:"header",fn:function(){return[s("span",[t._v(t._s(t.strings.openingHours))]),s("core-pro-badge")]},proxy:!0}])},[s("blur"),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("local-seo","local-seo-upsell","opening-hours"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("local-seo",null,"home"),"feature-list":t.features,"align-top":""},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[s("required-plans",{attrs:{addon:"aioseo-local-business"}}),t._v(" "+t._s(t.strings.locationInfo1)+" ")]},proxy:!0}])})],1)],1)},tt=[];const st={components:{Blur:l,RequiredPlans:w,CoreCard:r,CoreProBadge:H,Cta:k},data(){return{features:[this.$t.__("Show Opening Hours",this.$td),this.$t.__("Multiple Locations",this.$td),this.$t.__("Opening Hours block, widget and shortcode",this.$td)],strings:{locationInfo1:this.$t.__("Local Business schema markup enables you to tell Google about your business, including your business name, address and phone number, opening hours and price range. This information may be displayed as a Knowledge Graph card or business carousel.",this.$td),openingHours:this.$t.__("Opening Hours Settings",this.$td),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Local SEO",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Local SEO is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")}}}},h={};var et=n(st,Y,tt,!1,ot,null,null,null);function ot(t){for(let e in h)this[e]=h[e]}const at=function(){return et.exports}();var it=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("core-card",{attrs:{slug:"localBusinessOpeningHours","header-text":t.strings.openingHours,noSlide:!0}},[s("blur"),s("update-cta",{attrs:{"align-top":!0}})],1)],1)},nt=[];const rt={components:{Blur:l,CoreCard:r,UpdateCta:C},data(){return{strings:{openingHours:this.$t.__("Opening Hours Settings",this.$td)}}}},p={};var lt=n(rt,it,nt,!1,ct,null,null,null);function ct(t){for(let e in p)this[e]=p[e]}const ut=function(){return lt.exports}();var dt=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-opening-hours"},[t.shouldShowMain?s("opening-hours"):t._e(),t.shouldShowActivate?s("activate"):t._e(),t.shouldShowUpdate?s("update"):t._e(),t.shouldShowLite?s("lite"):t._e()],1)},_t=[];const ht={mixins:[D],components:{OpeningHours:W,Activate:X,Lite:at,Update:ut},data(){return{addonSlug:"aioseo-local-business"}}},$={};var pt=n(ht,dt,_t,!1,$t,null,null,null);function $t(t){for(let e in $)this[e]=$[e]}const Xt=function(){return pt.exports}();export{Xt as default};
