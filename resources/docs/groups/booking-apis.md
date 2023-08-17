# Booking APIs

Apis for managing reservation resource

## GET /reservations




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/reservations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reservations"
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
    "http://localhost/api/book-tour/doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"number_of_guests":"architecto","check_in":"eveniet","check_out":"voluptas","cost":"repellendus","paymentID":"aspernatur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/book-tour/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number_of_guests": "architecto",
    "check_in": "eveniet",
    "check_out": "voluptas",
    "cost": "repellendus",
    "paymentID": "aspernatur"
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
    "http://localhost/api/book-event/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"number_of_guests":"occaecati","check_in":"mollitia","check_out":"quos","cost":"quo","paymentID":"eum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/book-event/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number_of_guests": "occaecati",
    "check_in": "mollitia",
    "check_out": "quos",
    "cost": "quo",
    "paymentID": "eum"
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

</form>


## PUT /reservations/id




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/reservations/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reservations/ex"
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


## GET /reservations/id




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/reservations/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reservations/omnis"
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


## DELETE /reservations




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/reservations/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/reservations/et"
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



