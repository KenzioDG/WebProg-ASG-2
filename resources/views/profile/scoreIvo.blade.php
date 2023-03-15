@if (($scoreIvo >= 0) and ($scoreIvo < 60))
                    <div class="alert alert-danger d-inline-block">
                        Admission rejected
                    </div>
                        @elseif (($scoreIvo >= 60) and ($scoreIvo <= 100))
                    <div class="alert alert-success d-inline-block">
                        Admission accepted
                    </div>
                    @endif
