<div class="container">
    <nav class="nav" style="border-bottom: 2px solid #5989e5;">
      <a class="nav-link active" href="{{ route('dashboard', ['user' => auth()->user()->username ]) }}">Dashboard</a>
      <a class="nav-link active" href="#">Selling</a>
      <a class="nav-link active" href="#">Buying</a>
      <a class="nav-link active" href="#">Messages</a>
      <a class="nav-link active" href="#">Billing</a>
    </nav>
  </div>  