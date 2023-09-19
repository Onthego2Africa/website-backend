# Booking APIs

Apis for managing reservation resource

## GET /reservations




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/reservations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/reservations"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-reservations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-reservations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reservations"></code></pre>
</div>
<div id="execution-error-GETapi-reservations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reservations"></code></pre>
</div>
<form id="form-GETapi-reservations" data-method="GET" data-path="api/reservations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-reservations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-reservations" onclick="tryItOut('GETapi-reservations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-reservations" onclick="cancelTryOut('GETapi-reservations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-reservations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/reservations</code></b>
</p>
</form>


## POST /book-tour




> Example request:

```bash
curl -X POST \
    "https://onthego2africa.com/api/book-tour/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"number_of_guests":"est","check_in":"aliquid","check_out":"est","cost":"adipisci","paymentID":"vel"}'

```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/book-tour/autem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number_of_guests": "est",
    "check_in": "aliquid",
    "check_out": "est",
    "cost": "adipisci",
    "paymentID": "vel"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-book-tour--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-book-tour--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-book-tour--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-book-tour--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-book-tour--id-"></code></pre>
</div>
<form id="form-POSTapi-book-tour--id-" data-method="POST" data-path="api/book-tour/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-book-tour--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-book-tour--id-" onclick="tryItOut('POSTapi-book-tour--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-book-tour--id-" onclick="cancelTryOut('POSTapi-book-tour--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-book-tour--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/book-tour/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-book-tour--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>number_of_guests</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="number_of_guests" data-endpoint="POSTapi-book-tour--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>check_in</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="check_in" data-endpoint="POSTapi-book-tour--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>check_out</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="check_out" data-endpoint="POSTapi-book-tour--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="POSTapi-book-tour--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>paymentID</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="paymentID" data-endpoint="POSTapi-book-tour--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## POST /book-event




> Example request:

```bash
curl -X POST \
    "https://onthego2africa.com/api/book-event/libero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"number_of_guests":"illo","check_in":"dolorem","check_out":"autem","cost":"rem","paymentID":"laborum","package_id":"temporibus","name":"ipsum"}'

```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/book-event/libero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number_of_guests": "illo",
    "check_in": "dolorem",
    "check_out": "autem",
    "cost": "rem",
    "paymentID": "laborum",
    "package_id": "temporibus",
    "name": "ipsum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-book-event--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-book-event--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-book-event--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-book-event--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-book-event--id-"></code></pre>
</div>
<form id="form-POSTapi-book-event--id-" data-method="POST" data-path="api/book-event/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-book-event--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-book-event--id-" onclick="tryItOut('POSTapi-book-event--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-book-event--id-" onclick="cancelTryOut('POSTapi-book-event--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-book-event--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/book-event/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-book-event--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>number_of_guests</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="number_of_guests" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>check_in</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="check_in" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>check_out</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="check_out" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>paymentID</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="paymentID" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>package_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="package_id" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-book-event--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## GET /reservations/id




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/reservations/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/reservations/autem"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-reservations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-reservations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reservations--id-"></code></pre>
</div>
<div id="execution-error-GETapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reservations--id-"></code></pre>
</div>
<form id="form-GETapi-reservations--id-" data-method="GET" data-path="api/reservations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-reservations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-reservations--id-" onclick="tryItOut('GETapi-reservations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-reservations--id-" onclick="cancelTryOut('GETapi-reservations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-reservations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/reservations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-reservations--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PUT /reservations/id




> Example request:

```bash
curl -X PUT \
    "https://onthego2africa.com/api/reservations/quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/reservations/quos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-reservations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-reservations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-reservations--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-reservations--id-"></code></pre>
</div>
<form id="form-PUTapi-reservations--id-" data-method="PUT" data-path="api/reservations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-reservations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-reservations--id-" onclick="tryItOut('PUTapi-reservations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-reservations--id-" onclick="cancelTryOut('PUTapi-reservations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-reservations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/reservations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-reservations--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## DELETE /reservations




> Example request:

```bash
curl -X DELETE \
    "https://onthego2africa.com/api/reservations/aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/reservations/aliquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-reservations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-reservations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-reservations--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-reservations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-reservations--id-"></code></pre>
</div>
<form id="form-DELETEapi-reservations--id-" data-method="DELETE" data-path="api/reservations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-reservations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-reservations--id-" onclick="tryItOut('DELETEapi-reservations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-reservations--id-" onclick="cancelTryOut('DELETEapi-reservations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-reservations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/reservations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-reservations--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## POST /reservations/toggle-paid




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/togglepaid/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/togglepaid/est"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-togglepaid--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-togglepaid--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-togglepaid--id-"></code></pre>
</div>
<div id="execution-error-GETapi-togglepaid--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-togglepaid--id-"></code></pre>
</div>
<form id="form-GETapi-togglepaid--id-" data-method="GET" data-path="api/togglepaid/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-togglepaid--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-togglepaid--id-" onclick="tryItOut('GETapi-togglepaid--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-togglepaid--id-" onclick="cancelTryOut('GETapi-togglepaid--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-togglepaid--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/togglepaid/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-togglepaid--id-" data-component="url" required  hidden>
<br>

</p>
</form>



