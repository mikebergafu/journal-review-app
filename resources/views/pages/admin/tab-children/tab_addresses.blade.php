@if($active ?? '')
    <div class="tab-pane {{$active}}" id="tab_addresses">
        <p>
            My Messages
        </p>
        <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim
            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
            ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
            velit esse molestie consequat
        </p>
        <p>
            <a class="btn btn-info" href="http://ppsgh.org" target="_blank">
                Learn more...
            </a>
        </p>
    </div>
@else
    <div class="tab-pane" id="tab_addresses">
        <p>
            Addresses
        </p>
        <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim
            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
            ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
            velit esse molestie consequat
        </p>
        <p>
            <a class="btn btn-info" href="http://ppsgh.org" target="_blank">
                Learn more...
            </a>
        </p>
    </div>
@endif
