<div class="resume-modal" id="resumeModal">
    <div class="resume-modal-overlay" data-resume-close></div>
    <div class="resume-modal-content">
        <div class="resume-toolbar">
            <h4><i class="fa-solid fa-file-pdf"></i> Resume</h4>
            <div class="resume-toolbar-actions">
                <button type="button" class="resume_btn" data-resume-download>
                    <i class="fa-solid fa-download"></i> Download
                </button>
                <button type="button" class="resume_btn" data-resume-print>
                    <i class="fa-solid fa-print"></i> Print
                </button>
                <button type="button" class="resume_btn resume_btn_close" data-resume-close>
                    <i class="fa-solid fa-arrow-left"></i> Back
                </button>
            </div>
        </div>

        <div class="resume-frame-wrap">
            <iframe
                id="resumeFrame"
                class="resume-frame"
                src="{{ asset('images/projects/resume.pdf') }}"
                title="Resume PDF"
                frameborder="0"></iframe>
        </div>
    </div>
</div>
