(()=>{var e={311:e=>{"use strict";e.exports=jQuery}},o={};function n(t){var d=o[t];if(void 0!==d)return d.exports;var i=o[t]={exports:{}};return e[t](i,i.exports,n),i.exports}(()=>{var e=n(311),o=n(311);const t={init:function(){this.enter_key(),this.add_note(),this.remove_note()},enter_key:function(){e(document.body).on("keydown","#edd-note",(function(o){13===o.keyCode&&(o.metaKey||o.ctrlKey)&&(o.preventDefault(),e("#edd-add-note").click())}))},add_note:function(){e("#edd-add-note").on("click",(function(o){o.preventDefault();const n=e(this),t=e("#edd-note"),d=e(".edd-notes"),i=e(".edd-no-notes"),s=e(".edd-add-note .spinner"),c={action:"edd_add_note",nonce:e("#edd_note_nonce").val(),object_id:n.data("object-id"),object_type:n.data("object-type"),note:t.val()};if(c.note)n.prop("disabled",!0),s.css("visibility","visible"),e.ajax({type:"POST",data:c,url:ajaxurl,success:function(e){let o=wpAjax.parseAjaxResponse(e);o=o.responses[0],d.append(o.data),i.hide(),n.prop("disabled",!1),s.css("visibility","hidden"),t.val("")}}).fail((function(e){window.console&&window.console.log&&console.log(e),n.prop("disabled",!1),s.css("visibility","hidden")}));else{const e=t.css("border-color");t.css("border-color","red"),setTimeout((function(){t.css("border-color",e)}),userInteractionInterval)}}))},remove_note:function(){e(document.body).on("click",".edd-delete-note",(function(o){o.preventDefault();const n=e(this),t=e(".edd-note"),d=n.parents(".edd-note"),i=e(".edd-no-notes"),s=e("#edd_note_nonce");if(confirm(edd_vars.delete_note)){const o={action:"edd_delete_note",nonce:s.val(),note_id:n.data("note-id")};return d.addClass("deleting"),e.ajax({type:"POST",data:o,url:ajaxurl,success:function(e){return"1"===e&&d.remove(),1===t.length&&i.show(),!1}}).fail((function(e){window.console&&window.console.log&&console.log(e),d.removeClass("deleting")})),!0}}))}};o(document).ready((function(e){t.init()}))})()})();