window.wpPerfLab=window.wpPerfLab||{},function(e){window.wpPerfLab.webpUploadsFallbackWebpImages=function(t){for(let b=0;b<t.length;b++)try{var a=t[b],r=a.media_details,i=r.sources,l=r.sizes,s=Object.keys(l);if(l.full&&!l.full.sources["image/jpeg"])continue;var c=e.querySelectorAll("img.wp-image-"+a.id);for(let e=0;e<c.length;e++){var p=c[e].src;if(!i||s.length){var g=c[e].getAttribute("srcset");for(let e=0;e<s.length;e++){var o=l[s[e]].sources;if(o&&o["image/webp"]&&o["image/jpeg"]){if(o["image/webp"].source_url===p&&(p=o["image/jpeg"].source_url,!g))break;g&&(g=g.replace(o["image/webp"].source_url,o["image/jpeg"].source_url))}}g&&c[e].setAttribute("srcset",g),p&&c[e].setAttribute("src",p)}else p&&i["image/webp"]&&i["image/jpeg"]&&(p=p.replace(i["image/webp"].file,i["image/jpeg"].file),c[e].setAttribute("src",p))}}catch(e){}};var t=e.getElementById("webpUploadsFallbackWebpImages").getAttribute("data-rest-api"),a=function(a){var r=[];for(let e=0;e<a.length;e++){var i=a[e],l=i.getAttribute("srcset")||"";if("IMG"===i.nodeName&&(i.src.match(/\.webp$/i)||l.match(/\.webp\s+/))){var s=i.className.match(/wp-image-(\d+)/i);s&&s[1]&&-1===r.indexOf(s[1])&&r.push(s[1])}}for(let a=0,i=Math.ceil(r.length/100);a<i;a++){var c=[];for(let e=0;e<100&&e+100*a<r.length;e++)c.push(r[e+100*a]);var p=e.createElement("script"),g="wp/v2/media/?_fields=id,media_details&_jsonp=wpPerfLab.webpUploadsFallbackWebpImages&per_page=100&include="+c.join(",");-1!==t.indexOf("?")&&(g=g.replace("?","&")),p.src=t+g,e.body.appendChild(p)}};try{a(e.querySelectorAll("img")),new MutationObserver((function(e){for(let t=0;t<e.length;t++)a(e[t].addedNodes)})).observe(e.body,{subtree:!0,childList:!0})}catch(e){}}(document);