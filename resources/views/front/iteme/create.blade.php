@extends('front.layout')
@section('title' , '/طلب خدمة')
@section('content')

<section class="sec-about">
    <div class="landing" id="home">
      <div class="container">
        <div class="title-service-requestserc">
          <h1> اطلب خدمة</h1>
          <p>
            نقدم حلولاً ناجحة فائقة الاداء تضفً قيمة هائلة إلى عمالئنا في دولة اإلمارات ودول الخلٌيج و اللعالم ونعمل مع عدد كبير من المؤسسات المرموقة,نسعى لتطوير مشاريعكم والمساعده في انتشارها وان نكون الشركة الرائده في مجال التسويق الالكتروني من خلال تقديم افضل الخدمات بمساعدة فريق ذو خبره طويله في هذا المجال.
          </p>
        </div>
        <div class="service-requestserc-form">
            <form action="{{route('iteme.store')}}" method="post">
              @csrf
                <input type="text" name="name" id="name" placeholder="الإسم">
                <input type="email" name="email" id="email" placeholder="الايميل">
                <input type="number" name="phone" id="phone" placeholder="رقم الهاتف">
                <input type="text" name="country" id="country" placeholder="من اين انت؟">
                <select id="product_id" name="product_id" >
                    <option disabled	selected value="">نوع الخدمة</option>
                    @foreach($product as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                </select>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="تفاصيل المشروع"></textarea>
             
             
                <input type="submit" value="اطلب الخدمة">
            </form>
        </div>
      </div>
    </div>
  </section>

@endsection