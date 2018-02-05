

<div class="container">
    <h4>Hi,</h4>
        <p>A J. Taylor Registered user has sent you a message with an uploaded file.</p>
    <div class="row">
        <div class="col-md-10">
            <ul class="list-group">
              <li class="list-group-item">Name: {{ $clientupload['name'] }}</li>
              <li class="list-group-item">E-mail: {{ $clientupload['email'] }}</li>
              <li class="list-group-item">Tel: {{ $clientupload['phone'] }}</li>
              <li class="list-group-item">E-mail: {{ $clientupload['subject'] }}</li>
              <li class="list-group-item">File: {{ $clientupload['subject'] }} <img src="{{ $message->embed(realpath('client_uploads/'.$clientupload['file'])) }}" alt="" class="center-block"></li>
            </ul>

        </div>
    </div>
</div>
