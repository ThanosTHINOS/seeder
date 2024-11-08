<form method="GET" action="{{ route('catalogue.index') }}">
    <select name="category">
        <option value="">All</option>
        <option value="CD" {{ request()->category == 'CD' ? 'selected' : '' }}>CD</option>
        <option value="Newspaper" {{ request()->category == 'Newspaper' ? 'selected' : '' }}>Newspaper</option>
        <option value="FYP" {{ request()->category == 'FYP' ? 'selected' : '' }}>FYP</option>
    </select>
    <select name="sort">
        <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending</option>
    </select>
    <button type="submit">Filter</button>
</form>


<!-- Inline Styles -->
<style>
    .catalogue-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 20px;
    }

    .item-box {
        border: 1px solid #ddd;  /* Box border */
        border-radius: 8px;  /* Rounded corners */
        padding: 15px;  /* Space inside the box */
        width: 250px;  /* Fixed width for each item */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  /* Light shadow for depth */
        background-color: #fff;  /* White background */
        transition: all 0.3s ease-in-out;  /* Smooth transition for hover effect */
    }

    .item-box:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);  /* Darker shadow on hover */
        transform: translateY(-5px);  /* Lift the box on hover */
    }

    .item-box h3 {
        font-size: 18px;  /* Larger font size for the title */
        margin-bottom: 10px;  /* Spacing below the title */
    }

    .item-box p {
        font-size: 14px;  /* Font size for the content */
        margin-bottom: 8px;  /* Spacing between paragraphs */
    }

    .read-more {
        margin-top: 10px;
        font-size: 14px;
        font-weight: bold;
        color: #007bff;  /* Blue color for Read More text */
    }
</style>

<div class="catalogue-container">
    @foreach($items as $item)
        <div class="item-box">
            <h3>{{ $item->title }}</h3>
            <p><strong>Category:</strong> {{ $item->category }}</p>
            <p><strong>Author:</strong> {{ $item->author }}</p>
            <p><strong>Published on:</strong> {{ $item->publication_date }}</p>
            <p class="read-more">Read More</p>
        </div>
    @endforeach
</div>
