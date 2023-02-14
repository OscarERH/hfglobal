@props(['url'])
<tr>
  <td class="header">
    <a href="{{ $url }}" style="display: inline-block;">
      @if (trim($slot) === 'Laravel')
        <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
      @else
        <div style="width: 100px; height: 50px;">
          <svg id="{{ $slot }}" data-name="{{ $slot }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300">
            <path fill="#2f364b" d="M267.47,23.49V275.93h-71V177.09H109.8v98.84h-71V23.49h71v93.15h86.66V23.49Z"/>
            <path fill="#2f364b" d="M384.81,275.93V23.49H562.14V83.93H455.81v42h86.67v56.17H455.81v93.87Z"/>
            <path fill="#ff6967" d="M455.39,23.49,267.5,275.93H197.19L384.72,23.49Z"/>
          </svg>
        </div>
      @endif
    </a>
  </td>
</tr>
