<section class="container">
    <section id="main">
        <h1 class="mb-2 tabs-section">
            {{ trans('translation.home.faq.title') }}
        </h1>
        <div class="accordion" id="faq">
            <!-- <div class="card">
                <div class="faq-title">

                </div>
                <div class="card-header" id="faqhead22">
                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq22"
                        aria-expanded="true" aria-controls="faq22">WELCOME TO THE HYPERCOMMUNITY - WE HOPE YOU CHOOSE TO
                        JOIN US!</a>
                </div>

                <div id="faq22" class="collapse show" aria-labelledby="faqhead22" data-parent="#faq">
                    <div class="card-body">WELCOME TO THE HYPERCOMMUNITY - WE HOPE YOU CHOOSE TO JOIN US!
                    </div>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header" id="faqhead1">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                        aria-expanded="true"
                        aria-controls="faq1">{{ auth()->user() && cache()->has('question_faq1')? cache('question_faq1'): trans('translation.faq_inner.faq1.question') }}</a>
                </div>

                <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq1')? cache('answer_faq1'): trans('translation.faq_inner.faq1.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead2">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                        aria-expanded="true"
                        aria-controls="faq2">{{ auth()->user() && cache()->has('question_faq2')? cache('question_faq2'): trans('translation.faq_inner.faq2.question') }}</a>
                </div>

                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq2')? cache('answer_faq2'): trans('translation.faq_inner.faq2.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead3">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                        aria-expanded="true"
                        aria-controls="faq3">{{ auth()->user() && cache()->has('question_faq3')? cache('question_faq3'): trans('translation.faq_inner.faq3.question') }}</a>
                </div>

                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq3')? cache('answer_faq3'): trans('translation.faq_inner.faq3.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead4">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                        aria-expanded="true"
                        aria-controls="faq4">{{ auth()->user() && cache()->has('question_faq4')? cache('question_faq4'): trans('translation.faq_inner.faq4.question') }}</a>
                </div>

                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq4')? cache('answer_faq4'): trans('translation.faq_inner.faq4.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead5">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                        aria-expanded="true"
                        aria-controls="faq5">{{ auth()->user() && cache()->has('question_faq5')? cache('question_faq5'): trans('translation.faq_inner.faq5.question') }}</a>
                </div>

                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq5')? cache('answer_faq5'): trans('translation.faq_inner.faq5.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead6">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                        aria-expanded="true"
                        aria-controls="faq6">{{ auth()->user() && cache()->has('question_faq6')? cache('question_faq6'): trans('translation.faq_inner.faq6.question') }}</a>
                </div>

                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq6')? cache('answer_faq6'): trans('translation.faq_inner.faq6.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead7">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq7"
                        aria-expanded="true"
                        aria-controls="faq7">{{ auth()->user() && cache()->has('question_faq7')? cache('question_faq7'): trans('translation.faq_inner.faq7.question') }}</a>
                </div>

                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq7')? cache('answer_faq7'): trans('translation.faq_inner.faq7.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead8">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq8"
                        aria-expanded="true"
                        aria-controls="faq8">{{ auth()->user() && cache()->has('question_faq8')? cache('question_faq8'): trans('translation.faq_inner.faq8.question') }}</a>
                </div>

                <div id="faq8" class="collapse" aria-labelledby="faqhead8" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq8')? cache('answer_faq8'): trans('translation.faq_inner.faq8.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead9">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq9"
                        aria-expanded="true"
                        aria-controls="faq9">{{ auth()->user() && cache()->has('question_faq9')? cache('question_faq9'): trans('translation.faq_inner.faq9.question') }}</a>
                </div>

                <div id="faq9" class="collapse" aria-labelledby="faqhead9" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq9')? cache('answer_faq9'): trans('translation.faq_inner.faq9.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead10">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq10"
                        aria-expanded="true"
                        aria-controls="faq10">{{ auth()->user() && cache()->has('question_faq10')? cache('question_faq10'): trans('translation.faq_inner.faq10.question') }}</a>
                </div>

                <div id="faq10" class="collapse" aria-labelledby="faqhead10" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq10')? cache('answer_faq10'): trans('translation.faq_inner.faq10.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead11">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq11"
                        aria-expanded="true"
                        aria-controls="faq11">{{ auth()->user() && cache()->has('question_faq11')? cache('question_faq11'): trans('translation.faq_inner.faq11.question') }}</a>
                </div>

                <div id="faq11" class="collapse" aria-labelledby="faqhead11" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq11')? cache('answer_faq11'): trans('translation.faq_inner.faq11.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead12">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq12"
                        aria-expanded="true"
                        aria-controls="faq12">{{ auth()->user() && cache()->has('question_faq12')? cache('question_faq12'): trans('translation.faq_inner.faq12.question') }}</a>
                </div>

                <div id="faq12" class="collapse" aria-labelledby="faqhead12" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq12')? cache('answer_faq12'): trans('translation.faq_inner.faq12.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead13">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq13"
                        aria-expanded="true"
                        aria-controls="faq13">{{ auth()->user() && cache()->has('question_faq13')? cache('question_faq13'): trans('translation.faq_inner.faq13.question') }}</a>
                </div>

                <div id="faq13" class="collapse" aria-labelledby="faqhead13" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq13')? cache('answer_faq13'): trans('translation.faq_inner.faq13.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead14">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq14"
                        aria-expanded="true"
                        aria-controls="faq14">{{ auth()->user() && cache()->has('question_faq14')? cache('question_faq14'): trans('translation.faq_inner.faq14.question') }}</a>
                </div>

                <div id="faq14" class="collapse" aria-labelledby="faqhead14" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq14')? cache('answer_faq14'): trans('translation.faq_inner.faq14.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead15">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq15"
                        aria-expanded="true"
                        aria-controls="faq15">{{ auth()->user() && cache()->has('question_faq15')? cache('question_faq15'): trans('translation.faq_inner.faq15.question') }}</a>
                </div>

                <div id="faq15" class="collapse" aria-labelledby="faqhead15" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq15')? cache('answer_faq15'): trans('translation.faq_inner.faq15.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead16">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq16"
                        aria-expanded="true"
                        aria-controls="faq16">{{ auth()->user() && cache()->has('question_faq16')? cache('question_faq16'): trans('translation.faq_inner.faq16.question') }}</a>
                </div>

                <div id="faq16" class="collapse" aria-labelledby="faqhead16" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq16')? cache('answer_faq16'): trans('translation.faq_inner.faq16.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead17">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq17"
                        aria-expanded="true"
                        aria-controls="faq17">{{ auth()->user() && cache()->has('question_faq17')? cache('question_faq17'): trans('translation.faq_inner.faq17.question') }}</a>
                </div>

                <div id="faq17" class="collapse" aria-labelledby="faqhead17" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq17')? cache('answer_faq17'): trans('translation.faq_inner.faq17.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead18">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq18"
                        aria-expanded="true"
                        aria-controls="faq18">{{ auth()->user() && cache()->has('question_faq18')? cache('question_faq18'): trans('translation.faq_inner.faq18.question') }}</a>
                </div>

                <div id="faq18" class="collapse" aria-labelledby="faqhead18" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq18')? cache('answer_faq18'): trans('translation.faq_inner.faq18.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead19">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq19"
                        aria-expanded="true"
                        aria-controls="faq19">{{ auth()->user() && cache()->has('question_faq19')? cache('question_faq19'): trans('translation.faq_inner.faq19.question') }}</a>
                </div>

                <div id="faq19" class="collapse" aria-labelledby="faqhead19" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq19')? cache('answer_faq19'): trans('translation.faq_inner.faq19.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead20">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq20"
                        aria-expanded="true"
                        aria-controls="faq20">{{ auth()->user() && cache()->has('question_faq20')? cache('question_faq20'): trans('translation.faq_inner.faq20.question') }}</a>
                </div>

                <div id="faq20" class="collapse" aria-labelledby="faqhead20" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq20')? cache('answer_faq20'): trans('translation.faq_inner.faq20.answer') }}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead21">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq21"
                        aria-expanded="true"
                        aria-controls="faq21">{{ auth()->user() && cache()->has('question_faq21')? cache('question_faq21'): trans('translation.faq_inner.faq21.question') }}</a>
                </div>

                <div id="faq21" class="collapse" aria-labelledby="faqhead21" data-parent="#faq">
                    <div class="card-body">
                        {{ auth()->user() && cache()->has('answer_faq21')? cache('answer_faq21'): trans('translation.faq_inner.faq21.answer') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
