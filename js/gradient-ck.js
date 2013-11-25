/**
 * Gradual: Transitioned gradient backgrounds
 * MIT license http://www.opensource.org/licenses/mit-license.php/
 * @author Kyle Foster http://kylefoster.me
 * Stolen from http://bit.ly/10EDU9K & http://bit.ly/KvWBTK
 */(function(e,t,n,r){e.fn.gradual=function(t){t=e.extend({},e.fn.gradual.options,t);return this.each(function(){function u(){var e=1-n,t=o[i[0]],u=o[i[1]],a=o[i[2]],f=o[i[3]],l=Math.round(e*t[0]+n*u[0]),c=Math.round(e*t[1]+n*u[1]),h=Math.round(e*t[2]+n*u[2]),p=Math.round(e*a[0]+n*f[0]),d=Math.round(e*a[1]+n*f[1]),v=Math.round(e*a[2]+n*f[2]),m="#"+(l<<16|c<<8|h).toString(16),g="#"+(p<<16|d<<8|v).toString(16),y=/mozilla/.test(navigator.userAgent.toLowerCase())&&!/webkit/.test(navigator.userAgent.toLowerCase())?"-moz-":/webkit/.test(navigator.userAgent.toLowerCase())?"-webkit-":/msie/.test(navigator.userAgent.toLowerCase())?"-ms-":/opera/.test(navigator.userAgent.toLowerCase())?"-o-":"";r.css({background:y+"linear-gradient(left top, "+m+" 0%, "+g+" 100%)"});n+=s;if(n>=1){n%=1;i[0]=i[1];i[2]=i[3];i[1]=(i[1]+Math.floor(1+Math.random()*(o.length-1)))%o.length;i[3]=(i[3]+Math.floor(1+Math.random()*(o.length-1)))%o.length}}var n=0,r=e(this),i=[0,1,2,3],s=t.transSpeed/1e3,o=new Array([255,193,255],[159,255,255],[255,189,166],[101,80,255],[198,198,198],[255,193,255]);setInterval(u,10)})};e.fn.gradual.options={transSpeed:2}})(jQuery,window,document);jQuery(".home.gradient").gradual();jQuery(".home .about-content").gradual();jQuery(".home .list-content").gradual();