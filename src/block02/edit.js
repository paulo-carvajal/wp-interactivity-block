import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();

  return (
    <p {...blockProps}>
      {__("This is Block 02 – I'm in the editor!", "pac-blocks")}
    </p>
  );
}
