const body=document.body;
const toggle=document.getElementById("themeToggle");
const saved=localStorage.getItem("cc-theme");
if(saved==="light") body.classList.add("light");
function updateIcon(){ if(toggle) toggle.textContent=body.classList.contains("light")?"☀":"☾"; }
updateIcon();
if(toggle) toggle.addEventListener("click",()=>{body.classList.toggle("light");localStorage.setItem("cc-theme",body.classList.contains("light")?"light":"dark");updateIcon();});
function searchSite(){
 const q=(document.getElementById("globalSearch")?.value||"").trim();
 if(!q) return;
 window.location.href="roadmap.php?search="+encodeURIComponent(q);
}
const input=document.getElementById("globalSearch");
if(input) input.addEventListener("keydown",e=>{if(e.key==="Enter")searchSite();});
document.querySelectorAll(".road-node").forEach((n,i)=>{n.style.animationDelay=(i*90)+"ms";});
