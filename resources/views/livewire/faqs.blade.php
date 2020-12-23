<div class="faq-section">
                <div class="container">
                    <div class="text-center title">
                        <h3>FAQs</h3>
                        <p class="text">Read our FAQs for any help, If you can’t find what you’re looking for, we’re available 24/7, <a href="#">Just drop us a message</a></p>
                    </div>

                    <div class="accordion-container">


                        @foreach ($faqs as $faq)
                        <div class="set">
                            <div class="head">
                                <span>{!! $faq->title !!}</span>
                                <span class="icon far fa-plus"></span>
                            </div>
                            <div class="content2">
                                <p>{!!$faq->answer !!}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="button text-center">
                        <a href="#" class="main-btn blue">Show more <span class="icon"><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>