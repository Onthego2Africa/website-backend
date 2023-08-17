# NewsLetter APIs

Apis for managing newsletter resource

## GET /newsletter




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/newsletter-subscriptions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/newsletter-subscriptions"
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
{
    "newsletters": []
}
```
<div id="execution-results-GETapi-newsletter-subscriptions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-newsletter-subscriptions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-newsletter-subscriptions"></code></pre>
</div>
<div id="execution-error-GETapi-newsletter-subscriptions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-newsletter-subscriptions"></code></pre>
</div>
<form id="form-GETapi-newsletter-subscriptions" data-method="GET" data-path="api/newsletter-subscriptions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-newsletter-subscriptions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-newsletter-subscriptions" onclick="tryItOut('GETapi-newsletter-subscriptions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-newsletter-subscriptions" onclick="cancelTryOut('GETapi-newsletter-subscriptions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-newsletter-subscriptions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/newsletter-subscriptions</code></b>
</p>
</form>


## POST /newsletter-subscribe




> Example request:

```bash
curl -X POST \
    "http://localhost/api/newsletter-subscribe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"sit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/newsletter-subscribe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "sit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-newsletter-subscribe" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-newsletter-subscribe"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-newsletter-subscribe"></code></pre>
</div>
<div id="execution-error-POSTapi-newsletter-subscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-newsletter-subscribe"></code></pre>
</div>
<form id="form-POSTapi-newsletter-subscribe" data-method="POST" data-path="api/newsletter-subscribe" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-newsletter-subscribe', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-newsletter-subscribe" onclick="tryItOut('POSTapi-newsletter-subscribe');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-newsletter-subscribe" onclick="cancelTryOut('POSTapi-newsletter-subscribe');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-newsletter-subscribe" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/newsletter-subscribe</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-newsletter-subscribe" data-component="body" required  hidden>
<br>

</p>

</form>



