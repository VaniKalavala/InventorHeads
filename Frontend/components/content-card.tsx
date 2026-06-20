import Image from "next/image";

type ContentCardProps = {
  title: string;
  description: string;
  image?: string;
  label?: string;
};

export function ContentCard({
  title,
  description,
  image,
  label
}: ContentCardProps) {
  return (
    <article className="content-card">
      {image ? (
        <div className="content-card__image">
          <Image src={image} alt="" width={720} height={460} />
        </div>
      ) : null}
      <div className="content-card__body">
        {label ? <p className="item-label">{label}</p> : null}
        <h2>{title}</h2>
        <p>{description}</p>
      </div>
    </article>
  );
}
