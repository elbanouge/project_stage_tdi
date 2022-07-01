<ul class="list-inline m-0  ">
  <li class="nav-item list-inline-item  menu-dropdown {{ setActive(url("/"), "active") }}">
    <a class="nav-link menu-dropdown-toggle" href="{{ route("index") }}">
      <span data-hover="{{ trans("front.home") }}">{{ trans("front.home") }}</span>
    </a>
  </li>
  <li class="nav-item  list-inline-item  menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" 
      aria-haspopup="true" aria-expanded="false">
      <span data-hover="{{ trans("front.ville-tiznit") }}">{{ trans("front.ville-tiznit") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "تعريف-بالمدينة"]) !!}">تعريف بالمدينة</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المآثر-التاريخية"]) !!}">المآثر التاريخية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "تيزنيت-في-صور"]) !!}">تيزنيت في صور</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "مونوغرافية-المدينة"]) !!}">مونوغرافية
        المدينة</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "خريطة-المدينة"]) !!}">خريطة المدينة</a>
    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" 
      aria-haspopup="true" aria-expanded="false">
      <span data-hover="{{ trans("front.commune-board") }}">{{ trans("front.commune-board") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="#">الرئيس</a>
      <div class="sub-menu">
        <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "السيرة-الذاتية"]) !!}">السيرة الذاتية</a>
        <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "اختصاصات-الرئيس"]) !!}">اختصاصات الرئيس</a>
        <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "أنشطة-الرئيس"]) !!}">أنشطة الرئيس</a>
      </div>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المكتب"]) !!}">المكتب</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المجلس"]) !!}">المجلس</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "اللجان"]) !!}">اللجان</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "دورات-المجلس"]) !!}">دورات المجلس</a>
      <div class="sub-menu">
        <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "جدول-الأعمال"]) !!}">جدول الأعمال</a>
        <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "مقرارات-المجلس"]) !!}">مقرارات المجلس</a>
      </div>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "ميزانية-المجلس"]) !!}">ميزانية المجلس</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "برنامج-عمل-الجماعة"]) !!}">برنامج عمل
        الجماعة</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "القانون-الداخلي-للمجلس"]) !!}">القانون الداخلي
        للمجلس</a>

    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" 
      aria-haspopup="true" aria-expanded="false">
      <span data-hover="{{ trans("front.admin-commune") }}">{{ trans("front.admin-commune") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الهيكل-التنظيمي-للجماعة"]) !!}">الهيكل التنظيمي
        للجماعة</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "مديرية-المصالح-الجماعية"]) !!}">مديرية المصالح
        الجماعية</a>
      <a class="menu-dropdown-item"
        href="{!! route("page.show", ["name" => "قسم-الشؤون-التقنية-والتعمير-والبيئة-والشؤون-الرياضية-والثقافية"]) !!}">قسم
        الشؤون التقنية والتعمير والبيئة والشؤون الرياضية والثقافية</a>
      <a class="menu-dropdown-item"
        href="{!! route("page.show", ["name" => "قسم-الشؤون-الإدارية-والمالية-والإقتصادية-والإجتماعية"]) !!}">قسم الشؤون
        الإدارية والمالية والإقتصادية والإجتماعية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المرافق-الجماعية"]) !!}">المرافق الجماعية</a>
    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" toggle="menu-dropdown"
      aria-haspopup="true" aria-expanded="false">

      <span data-hover="{{ trans("front.programs-projects") }}">{{ trans("front.programs-projects") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "طلبات-العروض"]) !!}">طلبات العروض</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المشاريع-الكبرى"]) !!}">المشاريع الكبرى</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المجال-الإجتماعي"]) !!}">المجال الإجتماعي </a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المجال-الاقتصادي"]) !!}">المجال الاقتصادي</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المجال-الثقافي"]) !!}">المجال الثقافي</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المجال-الرياضي"]) !!}">المجال الرياضي</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المبادرة-الوطنية"]) !!}">المبادرة الوطنية</a>
    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="menu-dropdown"
      aria-haspopup="true" aria-expanded="false">

      <span data-hover="{{ trans("front.proximity-services") }}">{{ trans("front.proximity-services") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الشرطة-الإدارية"]) !!}">الشرطة الإدارية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الشؤون-المالية"]) !!}">الشؤون المالية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الممتلكات-الجماعية"]) !!}">الممتلكات
        الجماعية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "التعمير-و-البناء"]) !!}">التعمير و البناء</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الحالة-المدنية-وتصحيح-الإمضاءات"]) !!}">الحالة
        المدنية وتصحيح الإمضاءات</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "الشؤون-الثقافية"]) !!}">الشؤون الثقافية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "المكتب-الجماعي-لحفظ-الصحة"]) !!}">المكتب الجماعي
        لحفظ الصحة</a>
    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="menu-dropdown"
      aria-haspopup="true" aria-expanded="false">
      <span data-hover="{{ trans("front.publications-versions") }}">{{ trans("front.publications-versions") }}</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "منشورات-الجماعة"]) !!}">منشورات الجماعة</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "دليل-المساطر-الإدارية"]) !!}">دليل المساطر
        الإدارية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "مراسيم-وقوانين"]) !!}">مراسيم وقوانين</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "منشورات-وزارية"]) !!}">منشورات وزارية</a>
      <a class="menu-dropdown-item" href="{!! route("page.show", ["name" => "مستجدات"]) !!}">مستجدات</a>
    </div>
  </li>
  <li class="nav-item list-inline-item menu-dropdown">
    <a class="nav-link menu-dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="menu-dropdown"
      aria-haspopup="true" aria-expanded="false">
      <span data-hover="listing">listing</span>
    </a>
    <div class="menu-dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="menu-dropdown-item" href="{!! route("associaction.index") !!}">{{ trans("front.associactions")}}</a>
      <a class="menu-dropdown-item" href="{!! route("evenement.index") !!}">{{ trans("front.evenements")}}</a>
      <a class="menu-dropdown-item" href="{!! route("projet.index") !!}">{{ trans("front.projets")}}</a>
      <a class="menu-dropdown-item" href="{!! route("publication.index") !!}">{{ trans("front.publications")}}</a>
      <a class="menu-dropdown-item" href="{!! route("video.index") !!}">{{ trans("front.videos")}}</a>
      <a class="menu-dropdown-item" href="{!! route("poll.index") !!}">{{ trans("front.polls")}}</a>
      <a class="menu-dropdown-item" href="{!! route("article.index") !!}">{{ trans("front.articles")}}</a>
      <a class="menu-dropdown-item" href="{!! route("album.index") !!}">{{ trans("front.albums")}}</a>
      <a class="menu-dropdown-item" href="{!! route("associaction.index") !!}">{{ trans("front.associactions")}}</a>
    </div>
  </li>

  <li class="nav-item list-inline-item  menu-dropdown {{ setActive(url("/contact"), "active") }}">
    <a class="nav-link menu-dropdown-toggle" href="{{ route("contact") }}">
      <span data-hover="{{ trans("front.contact") }}">{{ trans("front.contact") }}</span>
    </a>
  </li>
</ul>