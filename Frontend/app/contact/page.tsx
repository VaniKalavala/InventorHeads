import { PageHero } from "@/components/page-hero";
import { SectionHeading } from "@/components/section-heading";
import { getPage, getSiteContent } from "@/lib/cms";

export default function ContactPage() {
  const page = getPage("contact");
  const { contact } = getSiteContent();

  return (
    <>
      <PageHero title={page.title} summary={page.summary} image={page.heroImage} />
      <section className="section section--white">
        <div className="section-inner split">
          <div>
            <SectionHeading
              eyebrow="Contact"
              title="Start a conversation"
              summary="Contact Form 7 shortcodes have been replaced with a frontend form shell. Connect this to your preferred email/API service when deployment details are chosen."
            />
            <p>
              {contact.location}
              <br />
              <a href={`mailto:${contact.email}`}>{contact.email}</a>
              <br />
              {contact.phone}
            </p>
          </div>
          <form className="contact-form">
            <input aria-label="Name" name="name" placeholder="Name" />
            <input aria-label="Email" name="email" placeholder="Email" type="email" />
            <input aria-label="Subject" name="subject" placeholder="Subject" />
            <textarea aria-label="Message" name="message" placeholder="Message" />
            <button className="button" type="button">
              Send Inquiry
            </button>
          </form>
        </div>
      </section>
    </>
  );
}
