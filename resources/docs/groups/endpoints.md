# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
    <title>Success</title>

    <style>
@import  url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,600&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
}
body  { 
    background-color: #ffe9cc;
  height: 100vh;
  display: flex;
  font-size: 14px;
  text-align: center;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', sans-serif;   
}        

.wrapperAlert {
  width: 500px;
  height: 400px;
  overflow: hidden;
  border-radius: 12px;
  border: thin solid #ddd;           
}

.topHalf {
  width: 100%;
  color: white;
  overflow: hidden;
  min-height: 250px;
  position: relative;
  padding: 40px 0;
  background: rgb(0,0,0);
  background: -webkit-linear-gradient(45deg, #009a4e, #49e051);
}

.topHalf p {
  margin-bottom: 10px;
  margin-top: 30px
}
svg {
  fill: white;
}
.topHalf h1 {
  font-size: 2.25rem;
  display: block;
  font-weight: 500;
  letter-spacing: 0.15rem;
  text-shadow: 0 2px rgba(128, 128, 128, 0.6);
}
        
/* Original Author of Bubbles Animation -- https://codepen.io/Lewitje/pen/BNNJjo */
.bg-bubbles{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;            
  z-index: 1;
}

li{
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);/* fade(green, 75%);*/
  bottom: -160px;

  -webkit-animation: square 20s infinite;
  animation:         square 20s infinite;

  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
}
li:nth-child(1){
  left: 10%;
}		
li:nth-child(2){
  left: 20%;

  width: 80px;
  height: 80px;

  animation-delay: 2s;
  animation-duration: 17s;
}		
li:nth-child(3){
  left: 25%;
  animation-delay: 4s;
}		
li:nth-child(4){
  left: 40%;
  width: 60px;
  height: 60px;

  animation-duration: 22s;

  background-color: rgba(white, 0.3); /* fade(white, 25%); */
}		
li:nth-child(5){
  left: 70%;
}		
li:nth-child(6){
  left: 80%;
  width: 120px;
  height: 120px;

  animation-delay: 3s;
  background-color: rgba(white, 0.2); /* fade(white, 20%); */
}		
li:nth-child(7){
  left: 32%;
  width: 160px;
  height: 160px;

  animation-delay: 7s;
}		
li:nth-child(8){
  left: 55%;
  width: 20px;
  height: 20px;

  animation-delay: 15s;
  animation-duration: 40s;
}		
li:nth-child(9){
  left: 25%;
  width: 10px;
  height: 10px;

  animation-delay: 2s;
  animation-duration: 40s;
  background-color: rgba(white, 0.3); /*fade(white, 30%);*/
}		
li:nth-child(10){
  left: 90%;
  width: 160px;
  height: 160px;

  animation-delay: 11s;
}

@-webkit-keyframes square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-500px) rotate(600deg); }
}
@keyframes  square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-500px) rotate(600deg); }
}

.bottomHalf {
  align-items: center;
  padding: 35px;
}
.bottomHalf p {
  font-weight: 500;
  font-size: 1.05rem;
  margin-bottom: 20px;
}

button {
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 5px;            
  padding: 10px 18px;            
  background-color: #009a4e;
  text-shadow: 0 1px rgba(128, 128, 128, 0.75);
  transition: all 0.3s ease;
}
button:hover {
  background-color: #007906;
}
button a{
    text-decoration: none;
    color: white;
}
    </style>
  </head>
  <body>
    <div class="wrapperAlert">
      <div class="contentAlert">
        <div class="topHalf">
          <p>
            <svg viewBox="0 0 512 512" width="100" title="check-circle">
              <path
                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
              />
            </svg>
          </p>
          

          <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>

        <div class="bottomHalf">
          <p>Email Verified Successfully</p>

          <button id="alertMO">
              <a href="https://">Visit On The go2 Africa</a>
              
          </button>
        </div>
      </div>
    </div>
  </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



