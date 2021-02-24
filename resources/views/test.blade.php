<!-- Route cố định -->
<a href="/User">User</a> |
<a href="/Product">Product</a> |
<a href="/News">News</a> |
<a href="/Service">Service</a> |

<hr>

<!-- Truyền parameters trong route Laravel -->
<ul>
    <li><a href="/news/1/category/100">Bài viết số 1</a></li>
    <li><a href="/news/2/category/102">Bài viết số 2</a></li>
    <li><a href="/news/3/category/103">Bài viết số 3</a></li>
    <li><a href="/news/4/category/104">Bài viết số 4</a></li>
    <li><a href="/news/5/category/105">Bài viết số 5</a></li>
</ul>

<hr>

<!-- Route name -->
<h2>Route name trong Laravel: route('name')</h2>
<ul>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
    <li><a href="{{ route('user') }}">User</a></li>
</ul>

<hr>

<!-- Route name có tham số parameter truyền vào lúc này ta thêm một mảng có id được gán-->
<h2>Route name có tham số truyền vào</h2>
<!-- Có 1 tham số truyền vào, key phần tử trong mảng là key ta đặt ở Route -->
<ul>
    <li><a href="{{ route('user.show', ['id' => 1]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 2]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 3]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 4]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 5]) }}">User detail</a></li>
</ul>
<!-- Có nhiều tham số truyền vào: Khi có n parameters(id, ...) thì trong mảng có n phần tử-->
<ul>
    <li><a href="{{ route('user.show.branch', ['id' => 1, 'branchId' => 101]) }}">User by branch 1</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 2, 'branchId' => 102]) }}">User by branch 2</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 3, 'branchId' => 103]) }}">User by branch 3</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 4, 'branchId' => 104]) }}">User by branch 4</a></li>
    <li><a href="{{ route('user.show.branch', ['id' => 5, 'branchId' => 105]) }}">User by branch 5</a></li>
</ul>

<hr>

<h2>Route where</h2>
<ul>
    <li><a href="{{ route('user.show', ['id' => 'oke']) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 21]) }}">User detail</a></li>
    <li><a href="{{ route('user.show', ['id' => 3]) }}">User detail</a></li>
</ul>

<hr>

<h2>Route group trong Laravel</h2>
<ul>
    <li><a href="{{ route('backend.user') }}">User management</a></li>
    <li><a href="{{ route('backend.product') }}">Product management</a></li>
    <li><a href="{{ route('backend.category') }}">Catagory management</a></li>
    <li><a href="{{ route('backend.news') }}">News management</a></li>
</ul>

<hr>

<h2>Route Group với namespace trong Laravel</h2>
<ul>
    <li><a href="{{ route('backend1.user1') }}">User management</a></li>
    <li><a href="{{ route('backend1.product1') }}">Product management</a></li>
    <li><a href="{{ route('backend1.category1') }}">Catagory management</a></li>
    <li><a href="{{ route('backend1.news1') }}">News management</a></li>
</ul>