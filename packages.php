 
<style>
    .package {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        text-align: center;
        transition: transform 0.2s;
    }
    .package:hover {
        transform: scale(1.05);
    }
</style>

<div class="container mt-5" id="packages">
    <h2 class="mb-4 text-center">خدماتنا</h2>
    <div class="row" id="service1_id">

        <!-- Service 1: جلسة علاج فردي للاكتئاب -->
        <div class="mb-3 col-sm-6 col-md-3" data-aos="zoom-in-up">
            <div class="package">
                <img src="packages/1.webp" class="img-fluid" alt="جلسة علاج فردي للاكتئاب">
                <h5 class="mt-3">جلسة علاج فردي للاكتئاب</h5>
                <p>تستخدم جلسات العلاج الفردي لدينا لعلاج الاكتئاب والقلق تقنية برمجة العقل السريعة الخاصة بنا للتعامل بفعالية مع الصدمات...</p>
                <!-- Two buttons -->
                <button class="btn btn-primary open-modal" data-href1="https://tachafi-by-cm.zbooni.com/products/individuals" data-href2="https://more-info.com/individuals">حجز موعد</button>
            </div>
        </div>

        <!-- Service 2: جلسة علاج زوجي -->
        <div class="mb-3 col-sm-6 col-md-3" data-aos="zoom-in-up">
            <div class="package">
                <img src="packages/2.webp" class="img-fluid" alt="جلسة علاج زوجي">
                <h5 class="mt-3">جلسة علاج زوجي</h5>
                <p>في جلسات العلاج الزوجي لدينا، نعمل عن قرب مع الشريكين لإعادتهم إلى اللحظة التي تواصلا فيها لأول مرة...</p>
                <button class="btn btn-primary open-modal" data-href1="https://tachafi-by-cm.zbooni.com/products/couple-therapy-1118679" data-href2="https://more-info.com/couple-therapy">حجز موعد</button>
            </div>
        </div>

        <!-- Service 3: جلسة علاج للمراهقين -->
        <div class="mb-3 col-sm-6 col-md-3" data-aos="zoom-in-up">
            <div class="package">
                <img src="packages/3.webp" class="img-fluid" alt="جلسة علاج للمراهقين">
                <h5 class="mt-3">جلسة علاج للمراهقين</h5>
                <p>في "تشافي"، يستخدم أطباؤنا ومعالجونا تقنية برمجة العقل السريعة لمساعدة المراهقين على تجاوز أصعب مراحل المراهقة...</p>
                <button class="btn btn-primary open-modal" data-href1="https://tachafi-by-cm.zbooni.com/products/teens-therapy" data-href2="https://more-info.com/teens-therapy">حجز موعد</button>
            </div>
        </div>

        <!-- Service 4: علاج الصدمات والحزن -->
        <div class="mb-3 col-sm-6 col-md-3" data-aos="zoom-in-up">
            <div class="package">
                <img src="packages/4.webp" class="img-fluid" alt="علاج الصدمات والحزن">
                <h5 class="mt-3">علاج الصدمات والحزن</h5>
                <p>ساعد طفلك على تجاوز التحديات العاطفية والسلوكية من خلال جلسات علاجية تفاعلية وممتعة...</p>
                <button class="btn btn-primary open-modal" data-href1="https://tachafi-by-cm.zbooni.com/products/child-therapy-1118680" data-href2="https://more-info.com/child-therapy">حجز موعد</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">حجز موعد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>اختر أحد الخيارات التالية:</p>
                <!-- Two buttons for the links -->
                <a id="modal-href1" href="#" class="mb-2 btn btn-primary w-100">جلسة باللغة العربية </a>
                <a id="modal-href2" href="#" class="mb-2 btn btn-primary w-100">  جلسة باللغة الانجليزية  </a>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle modal functionality
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', function() {
            const href1 = this.getAttribute('data-href1');
            const href2 = this.getAttribute('data-href2');

            // Set the href of the modal buttons
            document.getElementById('modal-href1').setAttribute('href', href1);
            document.getElementById('modal-href2').setAttribute('href', href2);

            // Show the modal
            var modal = new bootstrap.Modal(document.getElementById('appointmentModal'));
            modal.show();
        });
    });
</script>
