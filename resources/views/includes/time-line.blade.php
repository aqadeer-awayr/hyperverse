<div style="position: relative;">
    <h1 class="mb-2 tabs-section">
        {{ auth()->user() && cache()->has('title_time_line')? cache('title_time_line'): trans('translation.home.time_line.title') }}
    </h1>
    <div class="timeline">
        <div class="timeline-container right">
            <i class="icon fa fa-check" style="color:green"></i>
            {{-- <div class="date">22 Oct</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_right1')? cache('head_right1'): trans('translation.time_line_inner.right1.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_right1')? cache('description_right1'): trans('translation.time_line_inner.right1.description') }}
                </p>
            </div>
        </div>
        <div class="timeline-container left">
            <i class="icon fa fa-check" style="color:green"></i>
            {{-- <div class="date">15 Dec</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_left1')? cache('head_left1'): trans('translation.time_line_inner.left1.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_left1')? cache('description_left1'): trans('translation.time_line_inner.left1.description') }}
                </p>
            </div>
        </div>
        <div class="timeline-container right">
            <i class="icon">3</i>
            {{-- <div class="date">18 May</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_right2')? cache('head_right2'): trans('translation.time_line_inner.right2.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_right2')? cache('description_right2'): trans('translation.time_line_inner.right2.description') }}
                </p>
            </div>
        </div>
        <div class="timeline-container left">
            <i class="icon">4</i>
            {{-- <div class="date">10 Jul</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_left2')? cache('head_left2'): trans('translation.time_line_inner.left2.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_left2')? cache('description_left2'): trans('translation.time_line_inner.left2.description') }}
                </p>
            </div>
        </div>
        <div class="timeline-container right">
            <i class="icon">5</i>
            {{-- <div class="date">18 May</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_right3')? cache('head_right3'): trans('translation.time_line_inner.right3.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_right3')? cache('description_right3'): trans('translation.time_line_inner.right3.description') }}
                </p>
            </div>
        </div>
        <div class="timeline-container left">
            <i class="icon">6</i>
            {{-- <div class="date">10 Jul</div> --}}
            <div class="content">
                <h2>{{ auth()->user() && cache()->has('head_left3')? cache('head_left3'): trans('translation.time_line_inner.left3.head') }}
                </h2>
                <p>
                    {{ auth()->user() && cache()->has('description_left3')? cache('description_left3'): trans('translation.time_line_inner.left3.description') }}
                </p>
            </div>
        </div>
    </div>
    <h1>
        {{ auth()->user() && cache()->has('footer_time_line')? cache('footer_time_line'): trans('translation.home.time_line.footer') }}
    </h1>
</div>
