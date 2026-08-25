const products=[
{name:"English Willow Bat",price:35000,cat:"hard",icon:"🏏"},
{name:"Leather Cricket Ball",price:4500,cat:"hard",icon:"🔴"},
{name:"Batting Gloves",price:6500,cat:"hard",icon:"🧤"},
{name:"Cricket Batting Pads",price:9000,cat:"hard",icon:"🥅"},
{name:"Cricket Helmet",price:12000,cat:"hard",icon:"⛑️"},
{name:"Cricket Kit Bag",price:8500,cat:"hard",icon:"🎒"},
{name:"Soft Cricket Bat",price:4500,cat:"soft",icon:"🏏"},
{name:"Tennis Ball",price:350,cat:"soft",icon:"🎾"},
{name:"Tape Ball",price:450,cat:"soft",icon:"🟡"},
{name:"PVC Electric Tape",price:250,cat:"soft",icon:"🟢"},
{name:"Soft Ball Gloves",price:2500,cat:"soft",icon:"🧤"},
{name:"Plastic Stumps",price:1800,cat:"soft",icon:"🏟️"}
];

let cart=JSON.parse(localStorage.getItem("lsdCart")||"[]");

function renderProducts(){
  ["hard","soft"].forEach(cat=>{
    const box=document.getElementById(cat+"Products");
    box.innerHTML=products.filter(p=>p.cat===cat).map((p,i)=>`
      <div class="card"><div class="pic">${p.icon}</div><div class="info">
      <h3>${p.name}</h3><div class="price">Rs. ${p.price.toLocaleString()}</div>
      <button class="add" onclick="addToCart('${p.name}')">Add to Cart</button></div></div>`).join("");
  });
}
function addToCart(name){cart.push(products.find(p=>p.name===name));save();alert(name+" added to cart!")}
function save(){localStorage.setItem("lsdCart",JSON.stringify(cart));document.getElementById("cartCount").textContent=cart.length;renderCart()}
function renderCart(){
  const box=document.getElementById("cartItems");
  if(!cart.length){box.innerHTML="<p>Your cart is empty.</p>";document.getElementById("cartTotal").textContent="0";return}
  box.innerHTML=cart.map((p,i)=>`<div class="cart-item"><span>${p.name}</span><span>Rs. ${p.price.toLocaleString()} <button class="remove" onclick="removeItem(${i})">Remove</button></span></div>`).join("");
  document.getElementById("cartTotal").textContent=cart.reduce((s,p)=>s+p.price,0).toLocaleString();
}
function removeItem(i){cart.splice(i,1);save()}
function openCart(){document.getElementById("cart").style.display="block";renderCart()}
function closeCart(){document.getElementById("cart").style.display="none"}
function checkout(){
 if(!cart.length)return alert("Your cart is empty.");
 const total=cart.reduce((s,p)=>s+p.price,0);
 const names=cart.map(p=>p.name).join(", ");
 const msg=`Hello LSD Cricket, I want to order: ${names}. Total: Rs. ${total}`;
 window.open("https://wa.me/947XXXXXXXX?text="+encodeURIComponent(msg),"_blank");
}
renderProducts();save();
