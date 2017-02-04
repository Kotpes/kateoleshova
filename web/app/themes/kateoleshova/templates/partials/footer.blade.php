@if(is_active_sidebar('sidebar-footer'))
  <footer class="content-info container">
    <div class="content">
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </footer>
@endif
