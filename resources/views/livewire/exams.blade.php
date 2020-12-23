<div class="owl-carousel">
    @foreach ($exams as $exam)
        <div class="box-exam">
                            <div class="title">
                                <img src="assets/images/Icons/Image%201.png" alt="" width="40">
                                <h5>{!! $exam->title !!}</h5>
                            </div>
                            <div class="body">
                                <ul class="no-style">
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                    <li>Subject name here</li>
                                </ul>
                            </div>
                        </div>
    @endforeach
</div>