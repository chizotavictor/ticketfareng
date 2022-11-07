@extends('layouts.application')

@section('contents')
<div class="flex flex-row w-full px-10">
  <div class="flex-auto w-auto">
    <div class="hidden new-sans lg:block p-12 pb-4">
      <h3 class="text-5xl font-extrabold text-gray-900"
        >Welcome, <span style="color: #ff9000;">{{Auth::user()->getSingleName()}}!</span> </h3>
    </div>

    <div class="w-full p-4 lg:px-12 lg:my-5 lg:py-0 my-5">
        @include('components.quickstart-event')
        <br>
        @include('components.home-upcoming-events')
        <br>
    </div>
  </div>
  <div class="hidden lg:flex auto w-1/3">

    <div class="border border-white bg-gray-50 pt-8 mb-4 rounded-lg" style="
      overflow:hidden;
      height: fit-content;
      margin-top: 50px;
      margin-right:10px;
      width: 80%;">
      <div style="justify-self: flex-end; overflow: hidden; position: relative;margin-top:-173px; margin-left: 38px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="401" height="214" viewBox="0 0 401 214" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M301.817 45.9759C334.218 61.1724 325.8 91.27 321.832 116.152C318.057 139.823 314.25 167.19 280.578 179.159C248.297 190.634 210.573 176.293 175.835 168.049C146.142 161.003 114.717 154.149 101.073 136.562C86.4727 117.742 86.6643 94.645 105.322 77.1572C122.964 60.6219 157.966 58.9099 189.212 53.9516C227.704 47.8433 270.331 31.2086 301.817 45.9759Z" fill="#F05537"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M269.044 123.488C265.541 148.353 219.502 160.232 183.053 171.592C148.377 182.4 108.588 195.181 73.9449 184.296C40.7335 173.86 40.1891 146.716 32.8448 124.394C26.567 105.314 19.0908 85.4459 35.9939 68.949C54.0823 51.2953 86.0353 38.9527 120.201 39.1371C152.506 39.3114 173.721 56.4069 197.389 69.8199C226.547 86.3438 272.447 99.3258 269.044 123.488Z" fill="#FAAFA0"></path>
        </svg>
      </div>

      <div class="mb-5 p-5 pt-1">
        <div class="row mb-3">
          <h3 class="new-sans"
            style="font-size:1.9rem;
            color: #1e0a3c;
            font-size: 1.5rem;
            line-height: 2rem;
            letter-spacing: .5px;font-weight: 700;">Advance your event compaign to the next level.</h3>

          <div class="flex flex-col">
            <p class="ml-1" style="margin-top: 20px; font-size: .9rem; line-height: 1.6rem; color: #1e0a3c;">
              With premium features like reporting, email marketing tools, and social ads tools, you have everything you need to boost your event attendance and grow your audience.
            </p>
            <p class="ml-1" style="margin-top: 20px; font-size: .9rem; line-height: 1.6rem; color: #1e0a3c;">
              You can reach out upto 50,000 contacts daily and same time track your impact on our insights.
            </p>
            <p class="ml-1" style="margin-top: 20px; font-size: .9rem; line-height: 1.6rem; color: #1e0a3c;">
              We provide you with endpoint to promote your event on Facebook & Instagram , and launch SMS compaign directly from Ticketfare.
            </p>

            <a href="#" class="mt-3 mb-3 text-center text-white w-full bg-red-700 hover:bg-orange-800 p-3 rounded"
              style="font-weight: 700">Campaign now</a>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>
@endsection
