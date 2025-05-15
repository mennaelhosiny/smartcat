const translations = {
  en: {
    brand: "Constra",
    home: "Home",
    about: "About",
    services: "Services",
    projects: "Projects",
    pages: "Pages",
    features: "Our Features",
    blog: "Our Blog",
    team: "Our Team",
    testimonial: "Testimonial",
    errorPage: "404 Page",
    contact: "Contact",
    buttonText: "عربي"
  },
  ar: {
    brand: "كونسترا",
    home: "الرئيسية",
    about: "من نحن",
    services: "خدماتنا",
    projects: "مشاريعنا",
    pages: "الصفحات",
    features: "مميزاتنا",
    blog: "المدونة",
    team: "فريقنا",
    testimonial: "آراء العملاء",
    errorPage: "صفحة غير موجودة",
    contact: "اتصل بنا",
    buttonText: "English"
  }
};

// تعيين اللغة المختارة
function setLanguage(lang) {
  localStorage.setItem("language", lang);

  const elements = document.querySelectorAll("[data-i18n]");
  elements.forEach(el => {
    const key = el.getAttribute("data-i18n");
    if (translations[lang][key]) {
      el.textContent = translations[lang][key];
    }
  });

  // تحديث زر تغيير اللغة
  const btn = document.getElementById("languageToggle");
  if (btn) {
    btn.textContent = translations[lang].buttonText;
  }

  // تغيير اتجاه الصفحة
  document.documentElement.setAttribute("dir", lang === "ar" ? "rtl" : "ltr");
  document.documentElement.setAttribute("lang", lang);

  // تغيير الكلاسات للمسافات حسب اللغة
  const marginSwitchElements = document.querySelectorAll(".ms-3, .me-3, .ps-3, .pe-3, .ms-auto, .me-auto");
  marginSwitchElements.forEach(el => {
    // شيل كل المسافات الموجودة
    el.classList.remove("ms-3", "me-3", "ps-3", "pe-3", "ms-auto", "me-auto");

    if (lang === "ar") {
      el.classList.add("me-3"); // في العربي: margin-end = يمين
      el.classList.add("pe-3"); // padding-end
      el.classList.add("me-auto"); // للتحكم في التوسيط
    } else {
      el.classList.add("ms-3");
      el.classList.add("ps-3");
      el.classList.add("ms-auto");
    }
  });
}

// عند تحميل الصفحة
document.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("language") || "en";
  setLanguage(savedLang);

  const toggleBtn = document.getElementById("languageToggle");
  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      const currentLang = localStorage.getItem("language") || "en";
      const newLang = currentLang === "en" ? "ar" : "en";
      setLanguage(newLang);
    });
  }
});
