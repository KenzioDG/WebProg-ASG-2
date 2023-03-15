@if (($scoreGrady >= 0) and ($scoreGrady < 60))
<div class="alert alert-danger d-inline-block">
Admission rejected
</div>
@elseif (($scoreGrady >= 60) and ($scoreGrady <= 100))
<div class="alert alert-success d-inline-block">
Admission accepted
</div>
@endif




        