<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Date Picker - Tabler Blade Components'])
    </head>

    <body>
        <div class="page">
            {{-- Demo Navbar --}}
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">Tabler Blade Components</div>
                                <h2 class="page-title">Date Picker</h2>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('demo.index') }}" class="btn">
                                    <tabler:icon name="arrow-left" />
                                    Back to home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">

                            {{-- Section 1: Basic Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Basic Date Picker" name="basic_date" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Initial Value" name="date_with_value"
                                                    value="2024-11-19" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Placeholder" name="date_placeholder"
                                                    placeholder="Choose your date" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Help Text" name="date_help"
                                                    help="Select a date from the calendar" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Usage:</strong>
                                            <code>&lt;tabler:date-picker label="Basic Date Picker" name="basic_date"
                                                /&gt;</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 2: Layout Variants --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Layout Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Default Layout" name="date_default"
                                                    layout="default" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Icon Append" name="date_icon"
                                                    layout="icon" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Icon Prepend" name="date_icon_prepend"
                                                    layout="icon-prepend" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Inline Calendar" name="date_inline" inline />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Layouts:</strong>
                                            <code>layout="default"</code>,
                                            <code>layout="icon"</code>,
                                            <code>layout="icon-prepend"</code>,
                                            <code>inline</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 3: Date Modes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Date Modes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Single Date" name="date_single"
                                                    mode="single" layout="icon" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Date Range" name="date_range" mode="range"
                                                    :numberOfMonths="2" layout="icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Usage:</strong>
                                            <code>mode="single"</code> or
                                            <code>mode="range"</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 4: Date Restrictions --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Date Restrictions</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Min Date (Today)" name="date_min"
                                                    :minDate="date('Y-m-d')" layout="icon"
                                                    help="Cannot select dates before today" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Max Date (End of Year)" name="date_max"
                                                    maxDate="2024-12-31" layout="icon"
                                                    help="Cannot select dates after Dec 31, 2024" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Date Range (This Month)"
                                                    name="date_range_restrict" :minDate="date('Y-m-01')"
                                                    :maxDate="date('Y-m-t')" layout="icon"
                                                    help="Only current month dates allowed" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="No Weekends" name="date_no_weekends"
                                                    :disableWeekends="true" layout="icon"
                                                    help="Weekends are disabled" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Props:</strong>
                                            <code>minDate</code>,
                                            <code>maxDate</code>,
                                            <code>disableWeekends</code>,
                                            <code>disabledDates</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 5: Advanced Features --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Advanced Features</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Month/Year Dropdowns"
                                                    name="date_dropdowns" :monthDropdown="true" :yearDropdown="true"
                                                    layout="icon" help="Quick navigation with dropdowns" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Multiple Months"
                                                    name="date_multiple_months" :numberOfMonths="2" layout="icon"
                                                    help="Shows 2 months at once" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Week Numbers" name="date_week_numbers"
                                                    :showWeekNumbers="true" layout="icon"
                                                    help="ISO week numbers shown" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Custom Date Format"
                                                    name="date_custom_format" format="D MMM YYYY" value="19 Nov 2024"
                                                    layout="icon" help="Format: D MMM YYYY" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Props:</strong>
                                            <code>monthDropdown</code>,
                                            <code>yearDropdown</code>,
                                            <code>numberOfMonths</code>,
                                            <code>showWeekNumbers</code>,
                                            <code>format</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 6: Sizes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Input Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <tabler:date-picker label="Small" name="date_sm" size="sm"
                                                    layout="icon" />
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:date-picker label="Default" name="date_default_size"
                                                    layout="icon" />
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:date-picker label="Large" name="date_lg" size="lg"
                                                    layout="icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>Sizes:</strong>
                                            <code>size="sm"</code>,
                                            <code>size="lg"</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 7: Validation States --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Validation States</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Required Field" name="date_required"
                                                    :required="true" layout="icon"
                                                    help="This field is required" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="With Error" name="date_error"
                                                    layout="icon" error="Please select a valid date" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Disabled" name="date_disabled"
                                                    :disabled="true" value="2024-11-19" layout="icon" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:date-picker label="Readonly" name="date_readonly"
                                                    :readonly="true" value="2024-11-19" layout="icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-secondary mb-0">
                                            <strong>States:</strong>
                                            <code>required</code>,
                                            <code>disabled</code>,
                                            <code>readonly</code>,
                                            <code>error</code>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 8: Props Reference --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Props Reference</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table-bordered table">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20%">Prop</th>
                                                        <th style="width: 20%">Type</th>
                                                        <th style="width: 20%">Default</th>
                                                        <th style="width: 40%">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>label</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Field label text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>name</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Input name (auto-detected from wire:model)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>value</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Initial date value</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>placeholder</code></td>
                                                        <td>string</td>
                                                        <td>'Select a date'</td>
                                                        <td>Input placeholder text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>layout</code></td>
                                                        <td>string</td>
                                                        <td>'default'</td>
                                                        <td>Layout variant: default, icon, icon-prepend, inline</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>mode</code></td>
                                                        <td>string</td>
                                                        <td>'single'</td>
                                                        <td>Date selection mode: single, range</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>format</code></td>
                                                        <td>string</td>
                                                        <td>'Y-m-d'</td>
                                                        <td>Date format string</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>minDate</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Minimum selectable date</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>maxDate</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Maximum selectable date</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>disableWeekends</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Disable weekend dates</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>monthDropdown</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show month selection dropdown</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>yearDropdown</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show year selection dropdown</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>numberOfMonths</code></td>
                                                        <td>integer</td>
                                                        <td>1</td>
                                                        <td>Number of months to display</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>showWeekNumbers</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Display ISO week numbers</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Input size: sm, lg</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>required</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Mark field as required</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>disabled</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Disable the input</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>readonly</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Make input readonly</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>error</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Error message to display</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>help</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Help text below input</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 9: Code Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Code Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4>Basic Usage</h4>
                                        <pre><code>&lt;tabler:date-picker
    label="Select Date"
    name="date"
    layout="icon"
/&gt;</code></pre>

                                        <h4>Date Range with Restrictions</h4>
                                        <pre><code>&lt;tabler:date-picker
    label="Booking Period"
    name="booking_range"
    mode="range"
    :numberOfMonths="2"
    :minDate="date('Y-m-d')"
    :disableWeekends="true"
    layout="icon"
/&gt;</code></pre>

                                        <h4>With Livewire</h4>
                                        <pre><code>&lt;tabler:date-picker
    label="Event Date"
    wire:model.live="eventDate"
    layout="icon"
    :required="true"
/&gt;</code></pre>

                                        <h4>Inline Calendar</h4>
                                        <pre><code>&lt;tabler:date-picker
    label="Pick a Date"
    name="calendar_date"
    inline
/&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>

                @include('demo.partials.footer')
            </div>
        </div>

        {{-- Litepicker is loaded via resources/js/litepicker.js (bundled with Vite) --}}
        {{-- Litepicker CSS is included via demo.scss (tabler-vendors) --}}

        {{-- Component Scripts --}}
        @stack('scripts')
    </body>

</html>
