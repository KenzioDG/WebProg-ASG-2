@if (($scoreKen >= 0) and ($scoreKen < 60))
                    <div class="alert alert-danger d-inline-block">
                    Admission rejected
                    </div>
                    @elseif (($scoreKen >= 60) and ($scoreKen <= 100))
                    <div class="alert alert-success d-inline-block">
                    Admission accepted
                    </div>
                    @endif