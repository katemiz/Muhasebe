window.addEventListener("ConfirmModal",function(e){let i,a,n,l,t,o,r=!1,d=!1,c="#3085d6",h="#3085d6",f="#d33";switch(e.detail.type){case"freeze":i=e.detail.name+" will be frozen!",a="Once frozen, no editing is possible.",n="Freeze",l="Cancel",t="onFreezeConfirmed";break;case"assy_release":i="Assembly Release ?",a="This assembly and its children shall be released and PDM users shall be informed by email. Do you want to continue?",n="Release",l="Cancel",t="onReleaseConfirmed";break;case"release":i=e.detail.name+" Release ?",a="This "+e.detail.name+" shall be released and PDM users shall be informed by email. Do you want to continue?",n="Release",l="Cancel",t="onReleaseConfirmed";break;case"delete":i="Delete "+e.detail.name+" ? Really ?",a="Once deleted, there is no reverting back!",n="Delete",l="Oops ...",t="onDeleteConfirmed";break;case"mirror":i="Add Mirror Part?",a="Mirror part of this product shall be added.",n="Add",l="Oops ...",t="onMirrorConfirmed";break;case"replicate":i="Add Replicate Part?",a="A new part replicating this part shall be added.",n="Add",l="Oops ...",t="onReplicateConfirmed";break;case"revise":r=!0,d="Revise without files",i="Revise "+e.detail.name+"?",a="New revision will be editable.",n="Revise with files",l="Cancel",t="onReviseConfirmed";break;case"attach":i="Delete attached file?",a="Once deleted, there is no reverting back!",n="Delete File",l="Cancel",t="deleteAttach";break}Swal.fire({title:i,text:a,icon:"question",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:n,cancelButtonText:l,confirmButtonColor:c,cancelButtonColor:f,denyButtonColor:h,showDenyButton:r,denyButtonText:d}).then(s=>{if(s.isConfirmed&&(o={type:e.detail.type,withFiles:!0},Livewire.dispatch(t,o)),s.isDenied)o={type:e.detail.type,withFiles:!1},Livewire.dispatch(t,o);else return!1})});window.addEventListener("attachDeleted",function(e){Swal.fire({position:"top-end",icon:"success",title:"File/Attachment has been deleted",showConfirmButton:!1,timer:1500})});window.addEventListener("addTriggered",e=>{window.location.href=e.detail.redirect});window.addEventListener("queryChanged",e=>{Livewire.dispatch("startQuerySearch",{query:e.detail.query})});