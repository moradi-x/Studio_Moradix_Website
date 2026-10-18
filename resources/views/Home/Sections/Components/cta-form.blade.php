 <!-- ==================== CTA & Form Section ==================== -->
    <section class="section cta-section" id="contact">
        <div class="container">
            <div class="cta-content">
                <div class="cta-header">
                    <h2>آماده‌ی شروع پروژه‌تان هستید؟</h2>
                    <p>فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم و مشاوره رایگان ارائه دهیم</p>
                </div>

                <div class="form-card">
                    <div class="form-success" id="form-success">
                        ✓ درخواست شما با موفقیت ثبت شد. به‌زودی با شما تماس می‌گیریم.
                    </div>

                    <form id="contact-form" novalidate>
                        <!-- DYNAMIC: فرم به بک‌اند Laravel متصل می‌شود -->

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="form-label">
                                نام و نام خانوادگی <span class="required">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-input"
                                required
                                aria-required="true"
                                placeholder="مثال: علی محمدی">
                            <span class="form-error">لطفاً نام خود را وارد کنید</span>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone" class="form-label">
                                شماره تماس <span class="required">*</span>
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                class="form-input"
                                required
                                aria-required="true"
                                placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                            <span class="form-error">لطفاً شماره تماس معتبر وارد کنید</span>
                        </div>

                        <!-- Project Type -->
                        <div class="form-group">
                            <label for="project-type" class="form-label">
                                نوع پروژه <span class="required">*</span>
                            </label>
                            <select
                                id="project-type"
                                name="project_type"
                                class="form-select"
                                required
                                aria-required="true">
                                <option value="">انتخاب کنید</option>
                                <option value="shop">فروشگاه اینترنتی</option>
                                <option value="corporate">سایت شرکتی</option>
                                <option value="admin">پنل مدیریت / سیستم سفارشی</option>
                                <option value="seo">سئو و بهینه‌سازی</option>
                                <option value="other">سایر</option>
                            </select>
                            <span class="form-error">لطفاً نوع پروژه را انتخاب کنید</span>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description" class="form-label">
                                توضیح کوتاه (اختیاری)
                            </label>
                            <textarea
                                id="description"
                                name="description"
                                class="form-textarea"
                                placeholder="در چند خط بگویید چه پروژه‌ای مدنظرتان است..."></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary form-submit">
                            ارسال درخواست
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>